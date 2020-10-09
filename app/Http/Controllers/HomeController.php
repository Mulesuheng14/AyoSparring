<?php

namespace App\Http\Controllers;

use App\Classing\FlashSession;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        if(Auth::user()->role == 1) {
            return FlashSession::success('admin/dashboard','Welcome!');
        } else if(Auth::user()->role == 2) {
            return FlashSession::success('venue/dashboard','Welcome!');
        } else if(Auth::user()->role == 3) {
            return FlashSession::success('user/dashboard','Welcome!');
        }
    }
}
