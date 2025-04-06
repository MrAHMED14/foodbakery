<?php

namespace Database\Factories;

use App\Models\OpeningHour;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpeningHourFactory extends Factory
{
    protected $model = OpeningHour::class;

    public function definition(): array
    {
        $openingTime = $this->faker->time('H:i:s', strtotime('12:00'));
        $closingTime = $this->faker->time('H:i:s', strtotime('23:00'));

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
