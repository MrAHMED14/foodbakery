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
        $cuisines = ['Algerian', 'Italian', 'Mexican', 'Arab', 'Indian', 'French',  'Chinese', 'Japanese', 'Spanish', 'Turkish', 'Greek', 'Vietnamese', 'Korean', 'American', 'British', 'Brazilian', 'Moroccan'];

        foreach ($cuisines as $cuisine) {
            CuisineType::create([
                'name' => $cuisine,
                'description' => 'Delicious ' . $cuisine . ' food.',
                'is_popular' => true,
            ]);
        }
    }
}
