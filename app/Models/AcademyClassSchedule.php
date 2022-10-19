<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyClassSchedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'academy_class_id',
        'day_name',
        'start_at',
        'end_at',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The academyClass that belong to the schedule.
     */
    public function academyClass(){
        return $this->belongsTo(AcademyClass::class);
    }
}
