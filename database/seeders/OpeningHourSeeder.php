<?php

namespace Database\Seeders;

use App\Models\OpeningHour;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class OpeningHourSeeder extends Seeder
{
    public function run(): void
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        Restaurant::all()->each(function ($restaurant) use ($days) {
            foreach ($days as $day) {
                OpeningHour::factory()->create([
                    'restaurant_id' => $restaurant->id,
                    'day' => $day,
                ]);
            }
        });
    }
}
