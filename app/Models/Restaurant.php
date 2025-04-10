<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Restaurant extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'phone',
        'email',
        'latitude',
        'longitude',
        'description',
        //TODO: Change to name of capacity to nbr_tables_resvervation
        //TODO: Add Max person par table
        'capacity',
        'services',
        'payment_option',
        'is_verified',
        'accepts_orders',
        'accepts_reservations',
        'restaurant_logo',
        'cover_photo',
        'minimum_order',
        'maximum_order',
        'delivery_fee',
        'user_id',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'is_verified' => 'boolean',
        'accepts_orders' => 'boolean',
        'accepts_reservations' => 'boolean',
        'minimum_order' => 'integer',
        'maximum_order' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function openingHours()
    {
        return $this->hasMany(OpeningHour::class);
    }

    public function photoGallery()
    {
        return $this->hasMany(PhotoGallery::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function cuisines()
    {
        return $this->belongsToMany(CuisineType::class, 'restaurant_cuisine')
                    ->withPivot('is_specialty')
                    ->withTimestamps();
    }

    public function averageRating()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function roundedRating()
    {
        return round($this->averageRating(), 1);
    }

    public function reviewsCount()
    {
        return $this->reviews()->count();
    }

    public function isOpenNow(): bool
    {
        $now = Carbon::now()->timezone('+01:00');
        $currentDay = $now->format('l');

        $todayOpeningHours = $this->openingHours()
            ->where('day', $currentDay)
            ->first();

        if (!$todayOpeningHours) {
            return false;
        }

        if ($todayOpeningHours->is_closed) {
            return false;
        }

        if ($todayOpeningHours->opening_time === null || $todayOpeningHours->closing_time === null) {
            return false;
        }

        $parsedOpeningTime = Carbon::parse($todayOpeningHours->opening_time);
        $parsedClosingTime = Carbon::parse($todayOpeningHours->closing_time);

        $openingTime = $parsedOpeningTime->format('H:i:s');
        $closingTime = $parsedClosingTime->format('H:i:s');
        $currentTime = Carbon::parse($now->format('H:i:s'));

        if ($currentTime->between($openingTime, $closingTime)) {
            return true;
        }

        return false;
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
