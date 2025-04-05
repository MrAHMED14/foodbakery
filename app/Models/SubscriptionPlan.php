<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'duration',
        'price',
        'features',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'duration' => 'integer',
        'features' => 'json',
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
