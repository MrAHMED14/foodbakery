<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_id',
        'reply',
    ];

    protected $casts = [
        'reply' => 'string',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
