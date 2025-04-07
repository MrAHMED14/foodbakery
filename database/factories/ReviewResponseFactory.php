<?php

namespace Database\Factories;

use App\Models\ReviewResponse;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewResponseFactory extends Factory
{
    protected $model = ReviewResponse::class;

    public function definition()
    {
        return [
            'review_id' => Review::inRandomOrder()->first()->id,
            'reply' => $this->faker->sentence(20),
        ];
    }
}
