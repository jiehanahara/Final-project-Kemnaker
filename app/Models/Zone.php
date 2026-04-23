<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attraction;

class Zone extends Model
{
    protected $fillable = [
        'zone_name',
        'description',
        'price_range',
        'image',
    ];

    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }
}
