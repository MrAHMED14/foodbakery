<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\Review;
use App\Models\ReviewResponse;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maxRestaurantNumber = 50;

        User::factory($maxRestaurantNumber)->create(['role' => User::ROLE_RESTAURANT])->each(function ($user) {
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

            Review::factory(rand(3, 10))->create([
                'restaurant_id' => $restaurant->id,
            ])->each(function ($review) {
                if (rand(0, 1)) {
                    ReviewResponse::factory()->create([
                        'review_id' => $review->id,
                    ]);
                }
            });
        });
    }
}
