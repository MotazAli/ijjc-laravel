<?php

namespace App\Services;

use App\Interfaces\Repositories\AcademiesRepositoryInterface;
use App\Interfaces\Services\AcademiesServiceInterface;
use App\Models\Academy;
use App\Models\DTOs\AcademyDTO;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class AcademiesService implements AcademiesServiceInterface
{

    public function __construct(protected AcademiesRepositoryInterface $academiesRepository )
    { }

    public function createAcademy(array $data):Academy
    {
        $academyDTO = AcademyDTO::convertDataToDto($data);
        return $this->academiesRepository->insertAcademy($academyDTO);
    }

    public function getAcademyById(int $id): Academy
    {
        return $this->academiesRepository->findAcademyById($id);
    }

    public function getAllAcademies(): Collection
    {
        return $this->academiesRepository->findAllAcademies();
    }

    public function getAllAcademiesAscending(): Builder
    {
        return $this->academiesRepository->findAllAcademiesAscending();
    }

    public function getAllAcademiesAscendingPagination(int $rowsPerPage): LengthAwarePaginator
    {
        return $this->academiesRepository->findAllAcademiesAscendingPagination($rowsPerPage);
    }
}
