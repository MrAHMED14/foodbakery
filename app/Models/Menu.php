<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'restaurant_id',
    ];


    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
