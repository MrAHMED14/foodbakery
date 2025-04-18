<?php

namespace Database\Seeders;

use App\Models\CuisineType;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\OpeningHour;
use App\Models\PhotoGallery;
use App\Models\Restaurant;
use App\Models\Review;
use App\Models\ReviewResponse;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class DeploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = json_decode(File::get(database_path('data/restaurants.json')), true);

        foreach ($restaurants as $entry) {
            $userData = [
                'name'     => $entry['user']['name'],
                'password' => Hash::make($entry['user']['password']),
                'role'     => User::ROLE_RESTAURANT,
            ];

            if (!empty($entry['user']['email'])) {
                $userData['email'] = $entry['user']['email'];
            }

            $user = User::factory()->create($userData);

            $restaurant = Restaurant::factory()->create(array_merge($entry['restaurant'], [
                'user_id' => $user->id,
            ]));

            $restaurant->cuisines()->attach($entry['cuisines']);

            foreach ($entry['menus'] as $menuData) {
                $menu = Menu::factory()->create([
                    'restaurant_id' => $restaurant->id,
                    'name' => $menuData['name']
                ]);

                foreach ($menuData['dishes'] as $dishData) {
                    Dish::factory()->create([
                        'menu_id' => $menu->id,
                        'name' => $dishData['name'],
                        'description' => $dishData['description'],
                        'price' => $dishData['price'],
                        'dish_image' => $dishData['dish_image'],
                    ]);
                }
            }


            for ($i = 1; $i <= $entry['gallery_images']; $i++) {
                PhotoGallery::create([
                    'restaurant_id' => $restaurant->id,
                    'image_url'     => "{$entry['gallery_path']}/gallery-image-$i.jpg",
                ]);
            }

            $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
            foreach ($days as $day) {
                OpeningHour::factory()->create([
                    'restaurant_id' => $restaurant->id,
                    'day' => $day,
                ]);
            }

            Review::factory(rand(15, 150))->create([
                'restaurant_id' => $restaurant->id,
            ])->each(function ($review) {
                if (rand(0, 1)) {
                    ReviewResponse::factory()->create([
                        'review_id' => $review->id,
                    ]);
                }
            });
        }
    }
}
