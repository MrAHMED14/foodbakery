<?php

namespace Database\Factories;

use App\Models\OpeningHour;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpeningHourFactory extends Factory
{
    protected $model = OpeningHour::class;

    public function definition(): array
    {
        $openingHour = rand(8, 10); // 8AM - 10AM
        $openingMinute = rand(0, 59);
        $openingTime = sprintf('%02d:%02d:00', $openingHour, $openingMinute);

        $closingHour = rand(14, 23); // 2PM - 11PM
        $closingMinute = rand(0, 59);
        $closingTime = sprintf('%02d:%02d:00', $closingHour, $closingMinute);

        $isClosed = $this->faker->boolean(10);

        return [
            'day' => $this->faker->randomElement([
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
            ]),
            'opening_time' => $isClosed ? null : $openingTime,
            'closing_time' => $isClosed ? null : $closingTime,
            'is_closed' => $isClosed,
        ];
    }
}
