<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class openingHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'day',
        'opening_time',
        'closing_time',
        'is_closed',
    ];

    protected $casts = [
        'opening_time' => 'datetime',
        'closing_time' => 'datetime',
        'is_closed' => 'boolean',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
