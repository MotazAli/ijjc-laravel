<?php

namespace App\Interfaces\Services;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;

interface AuthServiceInterface{
    // public function login(Session $session,array $data):RedirectResponse;
    public function login(Session $session,array $data):bool;
    public function logout(Session $session):bool;
    // public function logout(Session $session):RedirectResponse;
}