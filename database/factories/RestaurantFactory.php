<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'commune' => $this->faker->city(),
            'wilaya' => $this->faker->state(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'description' => $this->faker->paragraphs(3, true),
            'capacity' => $this->faker->numberBetween(10, 100),
            'accepts_orders' => $this->faker->boolean(70),
            'accepts_reservations' => $this->faker->boolean(70),
            'is_verified' => $this->faker->boolean(70),
            'user_id' => User::factory(),
        ];
    }
}
