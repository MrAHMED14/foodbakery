<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'restaurant_id',
        'reservation_date',
        'nbr_table',
        'status',
        'payment_method',
        'payment_status',
        'payment_date',
        'first_name',
        'last_name',
        'start_time',
        'end_time',
        'session_duration',
    ];

    protected $casts = [
        'reservation_date' => 'datetime',
        'payment_date' => 'datetime',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
