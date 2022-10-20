<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //show login
    function index(){
        return view('auth.login');
    }

    public function login(LoginUserRequest $request){
        $request->Validated($request->all());
        if(!Auth::attempt(['email' => $request->email ,'password' =>$request->password ])){
            return back()->withErrors('invalid credentials');
        }

        $user = User::where('email',$request->email)->first();
        $request->session()->regenerate();
        Auth::login($user, $remember = true);
        return redirect(route('home.index'));
    }

    //show signup
    public function signup(){
        return view('auth.signup');
    }


    //show forgot password
    public function forgotPassword(){
        return view('auth.forgot');
    }


    //show logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login'));
    }


    //signup => store new user
    public function store(StoreUserRequest $request){
        $request->Validated($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    } 


}
