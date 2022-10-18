<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAcademy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'academy_id',
        'start_at',
        'end_at',
        'is_athelete_shown',
        'is_current',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    
}
