<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    protected $fillable = [
        'brand', 'model', 'engine_cc', 'horsepower', 'production_year',
        'description', 'category', 'license_type',
        'condition', 'mileage_km', 'price_eur',
    ];
}
