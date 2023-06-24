<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'car_buyer',
        'license_plate',
        'buy_price',
        'repair_parts',
        'mechanism',
        'tole',
        'electricity',
        'selling_price',
    ];
}
