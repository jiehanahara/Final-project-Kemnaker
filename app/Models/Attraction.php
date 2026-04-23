<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'zone_id',
        'name',
        'description',
        'ticket_price',
        'image',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function reviews()
{
    return $this->hasMany(Review::class);
}
}
