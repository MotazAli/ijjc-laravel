<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'uuid',
        'name',
        'email',
        'password',
        'birth_date',
        'gender',
        'phone',
        'image',
        'is_deleted',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * The addresses that user has.
     */
    public function addresses(){
        return $this->hasMany(Address::class);
    }


    /**
     * The academies that belong to the user.
     */
    public function academies()
    {
        return $this->belongsToMany(Academy::class, 'user_academies');
    }


    /**
     * The belts that belong to the user.
     */
    public function belts()
    {
        return $this->belongsToMany(Belt::class, 'user_belts');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }


    /**
     * The academyClasses that belong to the user instructor.
     */
    public function instructorAcademyClasses()
    {
        return $this->belongsToMany(AcademyClass::class, 'instructors');
    }

}
