<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomsrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'phone',
        'email',
        'country',
        'checkin',
        'checkout',
        'adults',
        'children',
        'special_arrangments',
        'room'
    ];
}
