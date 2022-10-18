<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'country',
        'city',
        'country_code',
        'address',
        'phone',
        'is_current',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The user that belong to the address.
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
