<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'restaurant_id',
        'order_date',
        'status',
        'total',
        'address',
        'city',
        'state',
        'order_type',
        'payment_method',
        'payment_status',
        'payment_date',
    ];

    protected $casts = [
        'order_date' => 'datetime',
        'payment_date' => 'datetime',
        'total' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
