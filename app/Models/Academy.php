<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'city',
        'country_code',
        'address',
        'owner',
        'phone',
        'image',
        'is_active',
        'is_shown',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The users that belong to the academy.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_academies');
    }


    /**
     * The Affiliates that academy has.
     */
    public function affiliates(){
        return $this->hasMany(Affiliate::class,'parent_academy_id');
    }
}
