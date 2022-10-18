<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Belt extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'priority',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The users that belong to the belt.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_belts');
    }
}
