<?php

namespace App\Interfaces\Repositories;

use App\Models\Academy;
use App\Models\DTOs\AcademyDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface AcademiesRepositoryInterface{
    public function insertAcademy(AcademyDTO $academyDTO): Academy;
    public function findAcademyOwner(string $owner):Academy;
    public function findAcademyById(int $id): Academy;
    public function findAllAcademies():Collection;
    public function findAllAcademiesAscending(): Builder ;
    public function findAllAcademiesAscendingPagination(int $rowsPerPage): LengthAwarePaginator;
}
