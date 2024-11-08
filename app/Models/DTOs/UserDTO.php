<?php


namespace App\Models\DTOs;

use DateTime;
use Illuminate\Support\Facades\Date;

class UserDTO{

    public function __construct(
        public string $name,
        public string $email,
        public string $password,
        public ?Date $birth_date = null,
        public ?string $gender = "",
        public ?string $phone = "",
        public ?string $image = "",
        public bool $is_deleted = false,
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
    public static function convertLite(array $data):UserDTO{
        return new UserDTO(
            $data['name'],
            $data['email'],
            $data['password']
        );
    }

}