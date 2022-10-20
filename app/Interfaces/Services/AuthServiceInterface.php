<?php

namespace App\Interfaces\Services;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;

interface AuthServiceInterface{
    public function login(Session $session,array $data):RedirectResponse;
    public function logout(Session $session):RedirectResponse;
}