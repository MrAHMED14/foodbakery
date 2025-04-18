<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CuisineTypeSeeder::class);
        $this->call(UserSeeder::class);

        User::factory(50)->create(['role' => User::ROLE_RESTAURANT])->each(function ($user) {
            $restaurant = Restaurant::factory()->create([
                'user_id' => $user->id,
            ]);

            $cuisineIds = CuisineType::inRandomOrder()->take(rand(1, 3))->pluck('id');

            $restaurant->cuisines()->attach($cuisineIds->toArray());

            $menus = Menu::factory(rand(1, 3))->create([
                'restaurant_id' => $restaurant->id,
            ]);

            $menus->each(function ($menu) {
                Dish::factory(rand(5, 10))->create([
                    'menu_id' => $menu->id,
                ]);
            });
        });

        $this->call(OpeningHourSeeder::class);
        $this->call(ReviewSeeder::class);

        $this->call(DeploymentSeeder::class);
    }
}
