<?php

namespace App\Models\DTOs;


use Illuminate\Support\Facades\Date;

class AcademyDTO
{

    public function __construct(
        public string $name,
        public string $country,
        public string $city,
        public string $country_code,
        public string $address,
        public string $owner,
        public string $phone,
        public string $image,
        public bool $is_active,
        public bool $is_shown,
        public bool $is_deleted,
    ){}



    public static function convertDataToDto(array $data): AcademyDTO
    {
        return new AcademyDTO(
            $data['name'],
            $data['country'],
            $data['city'],
            $data['country_code'],
            $data['address'],
            $data['owner'],
            $data['phone'],
            $data['image'],
            $data['is_active'],
            $data['is_shown'],
            $data['is_deleted'],
        );
    }

}
