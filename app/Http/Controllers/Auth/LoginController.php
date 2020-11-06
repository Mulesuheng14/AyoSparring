<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Classing\FlashSession;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if (Auth::user()) {
            if (Auth::user()->role == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->role == 2) {
                return redirect('venue/dashboard');
            } else if (Auth::user()->role == 3) {
                return redirect('user/dashboard');
            }
        }

        return view('guest.login.login');
    }

    public function username()
    {
        return 'email';
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            return FlashSession::error('login', 'Your email is not registered!');
        }

        $user_is_verified = $user->verified;
        if ($user_is_verified == 0) {
            return FlashSession::error('login', 'Your account has not been verified by Administrator!');
        }

        $user_type = $user->account_type;
        if ($user_type == 'venue') {
            $now = Carbon::now();
            $end_trial = Carbon::parse($user->verified_at)->addMonths(1);
            $payment_status = $user->venues->first()->payment_status;
            if ($payment_status == 0 && $now > $end_trial) {
                return FlashSession::error('login', 'Your free trial period is expired, please contact Ayo Sparring to subscribe!');
            }
        }

        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
