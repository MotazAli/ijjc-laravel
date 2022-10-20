<?php

namespace App\Interfaces\Services;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

interface UsersServiceInterface{
    public function createUser(array $data): User;
    public function getUser(string $email): User;
}