<?php


namespace App\Interfaces\Repositories;

use App\Models\DTOs\UserDTO;
use App\Models\User;

interface UsersRepositoryInterface{
    public function insertUser(UserDTO $userDTO):User;
    public function findUserBy(string $email):User;
}