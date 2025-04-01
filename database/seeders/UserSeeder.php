<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'status' => 'active',
            ],
            //doctor
            [
                'name' => 'Vender',
                'username' => 'vender',
                'email' => 'vender@vender.com',
                'password' => bcrypt('vender'),
                'role' => 'vender',
                'status' => 'active',
            ],
            //patient
            [
                'name' => 'Client',
                'username' => 'client',
                'email' => 'client@client.com',
                'password' => bcrypt('client'),
                'role' => 'client',
                'status' => 'active',
            ],
        ]);
    }
}
