<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beauty extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'position',
        'para'
    ];
}
