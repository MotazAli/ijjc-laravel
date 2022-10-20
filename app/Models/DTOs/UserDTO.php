<?php


namespace App\Models\DTOs;

use Illuminate\Support\Facades\Date;

class UserDTO{

    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public Date $birth_date,
        public string $gender,
        public string $phone,
        public string $image,
        public bool $is_deleted,
        )
    {}



    public static function convert(array $data):UserDTO{
        return new UserDTO(
            $data['name'],
            $data['email'],
            $data['password'],
            $data['birth_date'],
            $data['gender'],
            $data['phone'],
            $data['image'],
            $data['is_deleted'],
        );
    }

}