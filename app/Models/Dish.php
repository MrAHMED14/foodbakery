<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'dish_image',
        'price',
        'menu_id',
        'category_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'dish_image' => 'string',
    ];

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
