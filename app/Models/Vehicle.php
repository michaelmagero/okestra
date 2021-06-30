<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'make', 'model', 'year', 'transmission', 'fuel_type', 'engine_capacity',
        'images', 'display_image', 'color', 'registration', 'price'
    ];
}
