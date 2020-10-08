<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Classing\LogsApp;
use App\Mail\WelcomingEmail;
use Illuminate\Http\Request;
use App\Mail\ActivationEmail;
use App\Classing\FlashSession;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        // if(Auth::user()->role == 1) {
        //     return redirect('admin/dashboard');
        // } else if(Auth::user()->role == 2) {
        //     return redirect('venue/dashboard');
        // } else if(Auth::user()->role == 3) {
        //     return redirect('user/dashboard');
        // }

        return view('guest.register.user',);
    }

    public function registerVenue(Request $request)
    {
        // if(Auth::user()->role == 1) {
        //     return redirect('admin/dashboard');
        // } else if(Auth::user()->role == 2) {
        //     return redirect('venue/dashboard');
        // } else if(Auth::user()->role == 3) {
        //     return redirect('user/dashboard');
        // }

        return view('guest.register.venue');
    }

    public function registerUserSubmit(Request $request)
    {
        $data = ['asd'];

        return FlashSession::success(url("user/dashboard"), 'Berhasil');
    }

    public function registerVenueSubmit(Request $request)
    {
        $data = ['asd'];

        return FlashSession::success(url("venue/dashboard"), 'Berhasil');
    }

    // public function registration(Request $request)
    // {
    //     if(User::where('email',$request->mail_user)->exists()) {
    //         return FlashSession::error(url('register'), 'Email is already in used!');
    //     }

    //     $rulesValidation = array(
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'phone_number' => 'required|min:8|max:12',
    //         'mail_user' => 'required|email',
    //         'password_user' => 'min:8|required_with:password_confirmation|same:password_confirmation',
    //         'password_confirmation' => 'min:8'
    //     );

    //     $validator = Validator::make($request->all(), $rulesValidation);
    //     if ($validator->fails()) {
    //         $errors = $validator->errors();

    //         return FlashSession::error(url('register'), 'Please make sure the data submitted is correct!');
    //     }

    //     $storeAccount = User::create([
    //         'first_name' => htmlentities($request->first_name),
    //         'last_name' => htmlentities($request->last_name),
    //         'phone_number' => htmlentities($request->phone_number),
    //         'email' => htmlentities($request->mail_user),
    //         'password' => Hash::make($request->password_user),
    //         'provider' => 'waktukita',
    //         'role' => 2,
    //         'status' => 'active',
    //         'created_at' => Carbon::now(),
    //         'created_by' => 'Self',
    //         'updated_at' => Carbon::now(),
    //         'updated_by' => 'Self',
    //         'verified_token' => md5(uniqid(rand(),true)),
    //     ]);

    //     if($storeAccount) {
    //         Mail::to($storeAccount->email)->send(new ActivationEmail($storeAccount));

    //         $log = [
    //             'user_id' => $storeAccount->id,
    //             'nama' => $storeAccount->first_name." ".$storeAccount->last_name,
    //             'ngapain' => 'Create user account',
    //             'keterangan' => 'Registrasi akun berhasil',
    //             'kode' => 200,
    //             'status' => 'Success',
    //         ];
    //         LogsApp::savedLog($log);

    //         return FlashSession::success(url('login'), 'Registration success!');
    //     }

    //     $log = [
    //         'user_id' => $storeAccount->id,
    //         'nama' => $storeAccount->first_name." ".$storeAccount->last_name,
    //         'ngapain' => 'Create user account',
    //         'keterangan' => 'Failed store to database',
    //         'kode' => 400,
    //         'status' => 'Failed',
    //     ];
    //     LogsApp::savedLog($log);

    //     return FlashSession::error(url('register'), 'Failed store data to database, please contact administrator!');
    // }

    // public function verifiedToken($token)
    // {
    //     $user = User::where('verified_token',$token)->first();
    //     $storeAccount = $user;

    //     if($user == null) {
    //         return FlashSession::error(url('login'), 'Your token does not match! Please contact the administrator!');
    //     }

    //     $user->verified = 1;
    //     $user->verified_at = Carbon::now();

    //     $user->save();

    //     Mail::to($storeAccount->email)->send(new WelcomingEmail($storeAccount));

    //     $log = [
    //         'user_id' => $storeAccount->id,
    //         'nama' => $storeAccount->first_name." ".$storeAccount->last_name,
    //         'ngapain' => 'Verified user account',
    //         'keterangan' => 'Berhasil melakukan verifikasi akun (id: '.$storeAccount->id.')',
    //         'kode' => 200,
    //         'status' => 'Success',
    //     ];
    //     LogsApp::savedLog($log);

    //     return FlashSession::success(url('login'), 'Your account has already been verified');
    // }
}
