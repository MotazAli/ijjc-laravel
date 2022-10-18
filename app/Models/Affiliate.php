<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_academy_id',
        'affiliate_academy_id',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    /**
     * The academy that belong to the affiliate.
     */
    public function parentAcademy(){
        return $this->belongsTo(Academy::class,'parent_academy_id');
    }


    /**
     * The affiliate academy.
     */
    public function affiliateAcademy(){
        return $this->belongsTo(Academy::class,'affiliate_academy_id');
    }
}
