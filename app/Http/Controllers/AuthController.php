<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Interfaces\Services\AuthServiceInterface;
use App\Interfaces\Services\UsersServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct(
        protected AuthServiceInterface $authService,
        protected UsersServiceInterface $usersService
        ){ }



    //show login
    function index(){
        return view('auth.login');
    }

    public function login(LoginUserRequest $request):RedirectResponse{

        //dd($request->all());
        $data = $request->all();
        $request->Validated($data);
        if(!Auth::attempt(['email' => $data['email'] ,'password' =>$data['password'] ])){
            return back()->withErrors('invalid credentials');
        }

        $result =  $this->authService->login(
            $request->session(),
            $data
        );
        if($result) return redirect(route('home.index'));

        return back()->withErrors('Server is down, try again later');


        // return $this->authService->login(
        //     $request->session(),
        //     $request->all()
        // );

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
    public function logout(Request $request):RedirectResponse{
        $result = $this->authService->logout(
            $request->session()
        );
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        if($result) return redirect(route('auth.login'));

        return redirect(route('home.index'));
    }


    //signup => store new user
    public function store(StoreUserRequest $request):RedirectResponse{
        $data = $request->all();
        $request->Validated($data);

        $user = $this->usersService->createUser($data);

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
