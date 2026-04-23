<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
       'reviewer_name',
        'email',
        'rating',
        'comment',
        'status',
     
    ];

    public function reviewable()
    {
        return $this->morphTo();
    }

    public function scopeApproved($query)
{
    return $query->where('status', 'approved');
}

public function attraction()
{
    return $this->belongsTo(Attraction::class);
}
    
}
