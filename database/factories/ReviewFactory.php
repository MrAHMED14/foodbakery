<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'comment' => $this->faker->sentence(15),
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
