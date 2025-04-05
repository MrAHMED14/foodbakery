<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuisineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuisines = ['Italian', 'Mexican', 'Chinese', 'Indian', 'French', 'Japanese'];

        foreach ($cuisines as $cuisine) {
            CuisineType::create([
                'name' => $cuisine,
                'description' => 'Delicious ' . $cuisine . ' food.',
            ]);
        }
    }
}
