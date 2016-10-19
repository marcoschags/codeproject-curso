<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 19/10/2016
 * Time: 10:31
 */

namespace CodeProject\OAuth;


use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}