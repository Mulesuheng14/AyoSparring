<?php

namespace App\Classing;

class FlashSession
{
    public static function success($url,$message)
    {
        return redirect($url)->with(['success' => $message]);
    }

    public static function warning($url,$message)
    {
        return redirect($url)->with(['warning' => $message]);
    }

    public static function info($url,$message)
    {
        return redirect($url)->with(['info' => $message]);
    }

    public static function error($url,$message)
    {
        return redirect($url)->with(['error' => $message]);
    }

    public static function successWithModal($url,$message)
    {
        return redirect($url)->with(['success_with_modal' => $message]);
    }
}
