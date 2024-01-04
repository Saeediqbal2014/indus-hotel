<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        // ... other fields
        'title',
        'image'

    ];

    protected $casts = [
        'image' => 'array',
    ];
}
