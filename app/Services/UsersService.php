<?php

namespace App\Services;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Interfaces\Services\UsersServiceInterface;
use App\Models\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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


    public function getAllUsers():Collection{
        return $this->usersRepository->findAllUsers();
    }
    public function getAllUsersAscd(): Builder{
        return $this->usersRepository->findAllUsersAscd();
    }
    public function getAllUsersAscdPagination(int $rowsPerPage): LengthAwarePaginator{
        return $this->usersRepository->findAllUsersAscdPagination($rowsPerPage);
    }
}