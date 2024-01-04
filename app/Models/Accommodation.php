<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    protected $fillable = [
        'accommodation_cat_id',
        'name',
        'description',
        'bed',
        'images',
        'occupancy',
        'packages',
    ];
    function accommodation_cat()  {
        return $this->hasOne(AccommodationCategory::class,'id','accommodation_cat_id');
    }
}
