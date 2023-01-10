<?php

namespace App\Interfaces\Services;

use App\Models\Academy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\LengthAwarePaginator;

interface AcademiesServiceInterface
{
    public function createAcademy(array $data): Academy;
    public function getAcademyById(int $id): Academy;
    public function getAllAcademies():Collection;
    public function getAllAcademiesAscending(): Builder ;
    public function getAllAcademiesAscendingPagination(int $rowsPerPage): LengthAwarePaginator;
}
