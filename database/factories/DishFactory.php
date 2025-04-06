<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    protected $model = Dish::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'dish_image' => $this->faker->imageUrl(640, 480, 'food', true),
            'price' => $this->faker->randomFloat(2, 5, 50),
            'menu_id' => null,
            'categorie_id' => null,
        ];
    }
}
