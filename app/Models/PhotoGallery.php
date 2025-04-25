<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'image_url',
        'description',
        'is_thumbnail'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
