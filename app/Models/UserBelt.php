<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBelt extends Model
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
        'belt_id',
        'start_at',
        'is_current',
        'is_deleted',
        'created_by',
        'updated_by'
    ];
}
