<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classing\FlashSession;

class GuestController extends Controller
{
    public function index()
    {
        $data = ['asd'];

        return view('guest.landing',$data);
    }

    public function login()
    {
        $data = ['asd'];

        return view('guest.login.login',$data);
    }

    public function loginSubmit()
    {
        return FlashSession::success(url("admin/dashboard"), 'Berhasil');
    }
    
    public function registerUser(Request $request)
    {
        $data = ['asd'];

        return view('guest.register.user',$data);
    }

    public function registerVenue(Request $request)
    {
        $data = ['asd'];

        return view('guest.register.venue',$data);
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


}
