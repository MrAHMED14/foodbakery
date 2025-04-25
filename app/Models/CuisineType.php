<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class CuisineType extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'description',
        'is_popular',
    ];

    protected $casts = [
        'is_popular' => 'boolean',
    ];

    /**
     * The restaurants that belong to the cuisine type.
     */
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_cuisine')
                    ->withTimestamps();
    }

    public function toSearchableArray()
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
        ];
    }
}
