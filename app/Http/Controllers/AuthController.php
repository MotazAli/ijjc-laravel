<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Interfaces\Services\AuthServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct(protected AuthServiceInterface $authService)
    { }



    //show login
    function index(){
        return view('auth.login');
    }

    public function login(LoginUserRequest $request){

        //dd($request->all());
        $request->Validated($request->all());
        return $this->authService->login(
            $request->session(),
            $request->all()
        );

        // if(!Auth::attempt(['email' => $request->email ,'password' =>$request->password ])){
        //     return back()->withErrors('invalid credentials');
        // }

        // $remember = ($request->remember ==="on")? true : false;
        // $user = $this->usersService->getUser($request->email);
        // $request->session()->regenerate();
        // Auth::login($user, $remember);
        // return redirect(route('home.index'));
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
        return $this->authService->logout(
            $request->session()
        );
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect(route('auth.login'));
    }


    //signup => store new user
    public function store(StoreUserRequest $request){
        $data = $request->all();
        $request->Validated($data);

        $user = $this->usersService()->createUser($data);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'uuid' => Str::uuid()
        // ]);

        $request->session()->regenerate();
        Auth::login($user);
        return redirect(route('home.index'));
    }


}
