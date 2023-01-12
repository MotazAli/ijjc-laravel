<?php

namespace App\Repositories;

use App\Interfaces\Repositories\AcademiesRepositoryInterface;
use App\Models\Academy;
use App\Models\DTOs\AcademyDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AcademiesRepository implements AcademiesRepositoryInterface
{

    public function insertAcademy(AcademyDTO $academyDTO): Academy
    {
        return Academy::create([
            'name' => $academyDTO->name,
            'country' => $academyDTO->country,
            'city' => $academyDTO->city,
            'country_code' => $academyDTO->countryCode,
            'address' => $academyDTO->address,
            'owner' => $academyDTO->owner,
            'phone' => $academyDTO->phone,
            'image' => $academyDTO->image,
            'is_active' => $academyDTO->is_active,
            'is_shown' => $academyDTO->is_shown,
            'is_deleted' => $academyDTO->is_deleted,
            'created_by' => $academyDTO->createdBy,
            'updated_by' => $academyDTO->updatedBy
        ]);
    }


    public function findAcademyById(int $id): Academy
    {
        return Academy::find($id);
    }

    public function findAcademyOwner(string $owner): Academy
    {
        return Academy::where('owner',$owner)->first();
    }

    public function findAllAcademies(): Collection { return Academy::all(); }

    public function findAllAcademiesAscending(): Builder
    {
        return Academy::orderBy('created_at','desc');
    }

    public function findAllAcademiesAscendingPagination(int $rowsPerPage): LengthAwarePaginator
    {
        return Academy::orderBy('created_at','desc')->paginate($rowsPerPage);
    }
}
