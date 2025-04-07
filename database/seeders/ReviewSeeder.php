<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\ReviewResponse;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::factory(300)->create()->each(function ($review) {
            if (rand(0, 1)) {
                ReviewResponse::factory()->create([
                    'review_id' => $review->id,
                ]);
            }
        });
    }
}
