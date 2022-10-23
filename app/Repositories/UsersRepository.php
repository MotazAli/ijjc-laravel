<?php


namespace App\Repositories;

use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Models\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersRepository implements UsersRepositoryInterface{

    public function insertUser(UserDTO $userDTO):User{
        return User::create([
            'name' => $userDTO->name,
            'email' => $userDTO->email,
            'password' =>  Hash::make($userDTO->password),
            'uuid' => Str::uuid()
        ]);
    }
    public function findUserBy(string $email):User{
        return User::where('email',$email)->first();
    }


    public function findAllUsers():Collection { return User::all(); }

    public function findAllUsersAscd(): Builder {
        return User::orderBy('created_at','desc');
    }
    public function findAllUsersAscdPagination(int $rowsPerPage): LengthAwarePaginator{
         return User::orderBy('created_at','desc')->paginate($rowsPerPage);
    }
}