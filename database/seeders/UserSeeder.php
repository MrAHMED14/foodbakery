<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role' => User::ROLE_ADMIN,
        ]);

        // Restaurant Owner
        $restaurantOwner = User::create([
            'name'     => 'Restaurant Owner',
            'email'    => 'restaurant@restaurant.com',
            'password' => Hash::make('restaurant'),
            'role'     => User::ROLE_RESTAURANT,
        ]);

        $restaurant = Restaurant::factory()->create([
            'user_id'     => $restaurantOwner->id,
            'is_verified' => true,
            'capacity'    => 1,
        ]);

        $restaurant->cuisines()->attach(
            CuisineType::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray()
        );

        Menu::factory(rand(1, 3))->create([
            'restaurant_id' => $restaurant->id,
        ])->each(function ($menu) {
            Dish::factory(rand(5, 10))->create([
                'menu_id' => $menu->id,
            ]);
        });

        // Normal Customer
        User::create([
            'name' => 'Customer User',
            'email' => 'client@client.com',
            'password' => Hash::make('client'),
            'role' => User::ROLE_USER,
        ]);
    }
}
