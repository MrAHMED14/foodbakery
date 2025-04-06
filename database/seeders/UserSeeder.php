<?php

namespace Database\Seeders;

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
            'name' => 'Restaurant Owner',
            'email' => 'restaurant@restaurant.com',
            'password' => Hash::make('restaurant'),
            'role' => User::ROLE_RESTAURANT,
        ]);
        Restaurant::factory()->create(['user_id' => $restaurantOwner->id, 'is_verified' => true, 'capacity' => 1]);

        // Normal Customer
        User::create([
            'name' => 'Customer User',
            'email' => 'client@client.com',
            'password' => Hash::make('client'),
            'role' => User::ROLE_USER,
        ]);
    }
}
