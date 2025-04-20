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


        $this->call(DeploymentSeeder::class);

        $this->call(RestaurantSeeder::class);
        $this->call(OpeningHourSeeder::class);
    }
}
