<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //show login
    function login(){
        return view('auth.login');
    }

    //show signup
    function signup(){
        return view('auth.signup');
    }


    //show forgot password
    function forgotPassword(){
        return view('auth.forgot');
    }


    //show logout
    function logout(){
        return 'loged out';
    }


}
