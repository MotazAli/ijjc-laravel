<?php

namespace App\Interfaces\Services;


use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface UsersServiceInterface{
    public function createUser(array $data): User;
    public function getUser(string $email): User;
    public function getAllUsers():Collection;
    public function getAllUsersAscd(): Builder ;
    public function getAllUsersAscdPagination(int $rowsPerPage): LengthAwarePaginator;
}