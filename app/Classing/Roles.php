<?php

namespace App\Classing;

use Illuminate\Support\Facades\Auth;

class Roles
{
    public static function getRole()
    {
        $user = Auth::user();

        if($user->role == 1) {
            return 'admin';
        } elseif($user->role == 2) {
            return 'venue';
        } elseif($user->role == 3) {
            return 'user';
        }
    }

    public static function isAdmin()
    {
        return static::getRole() == 'admin';
    }

    public static function isUser()
    {
        return static::getRole() == 'user';
    }

    public static function isVenue()
    {
        return static::getRole() == 'venue';
    }
}
