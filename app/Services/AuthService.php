<?php


namespace App\Services;

use App\Interfaces\Services\AuthServiceInterface;
use App\Interfaces\Services\UsersServiceInterface;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface {


    public function __construct(protected UsersServiceInterface $usersService)
    {}

    public function login(Session $session,array $data):RedirectResponse{

        if(!Auth::attempt(['email' => $data['email'] ,'password' =>$data['password'] ])){
            return back()->withErrors('invalid credentials');
        }

        $remember = $data['remember'] ?? null;
        $remember = ($remember ==="on")? true : false;
        $user = $this->usersService->getUser($data['email']);
        $session->regenerate();
        Auth::login($user, $remember);
        return redirect(route('home.index'));
    }
    
    public function logout(Session $session):RedirectResponse{
        Auth::logout();
        $session->invalidate();
        $session->regenerateToken();
        return redirect(route('auth.login'));
    }
}