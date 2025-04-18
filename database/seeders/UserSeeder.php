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

        // Normal Customer
        User::create([
            'name' => 'Customer User',
            'email' => 'client@client.com',
            'password' => Hash::make('client'),
            'role' => User::ROLE_USER,
        ]);
    }
}
