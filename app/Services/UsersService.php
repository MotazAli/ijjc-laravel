<?php

namespace App\Services;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Interfaces\Services\UsersServiceInterface;
use App\Models\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersService implements UsersServiceInterface{
    

    public function __construct(protected UsersRepositoryInterface $usersRepository )
    { }



    public function createUser(array $data): User{
        $userDTO = UserDTO::convert($data);
        return $this->usersRepository->insertUser($userDTO);
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' =>  Hash::make($data['password']),
        //     'uuid' => Str::uuid()
        // ]);
    }

    public function getUser(string $email): User {
        return $this->usersRepository->findUserBy($email);
        // return User::where('email',$email)->first();
    }
}