<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyClass extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'duration',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The schedules that AcademyClass has.
     */
    public function schedules(){
        return $this->hasMany(AcademyClassSchedule::class);
    }


     /**
     * The users that belong to the role.
     */
    public function instructors()
    {
        return $this->belongsToMany(User::class, 'instructors');
    }
}
