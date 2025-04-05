<?php

namespace Database\Seeders;

use App\Models\CuisineType;
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
        $this->call(UserSeeder::class);
        $this->call(CuisineTypeSeeder::class);

        User::factory(50)->create(['role' => User::ROLE_RESTAURANT])->each(function ($user) {
            $restaurant = Restaurant::factory()->create([
                'user_id' => $user->id,
            ]);

            $cuisineIds = CuisineType::inRandomOrder()->take(rand(1, 3))->pluck('id');

            $restaurant->cuisines()->attach($cuisineIds->toArray(), [
                'is_specialty' => true,
            ]);
        });
    }
}
