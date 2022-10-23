<?php


namespace App\Interfaces\Repositories;

use App\Models\DTOs\UserDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface UsersRepositoryInterface{
    public function insertUser(UserDTO $userDTO):User;
    public function findUserBy(string $email):User;
    public function findAllUsers():Collection;
    public function findAllUsersAscd(): Builder ;
    public function findAllUsersAscdPagination(int $rowsPerPage): LengthAwarePaginator;
}