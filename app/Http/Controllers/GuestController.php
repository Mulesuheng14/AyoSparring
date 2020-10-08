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
}
