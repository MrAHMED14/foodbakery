<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'note_id',
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
