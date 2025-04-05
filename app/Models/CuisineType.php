<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuisineType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The restaurants that belong to the cuisine type.
     */
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_cuisine')
                    ->withPivot('is_specialty')
                    ->withTimestamps();
    }
}
