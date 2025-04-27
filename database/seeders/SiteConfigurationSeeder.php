<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteConfiguration;

class SiteConfigurationSeeder extends Seeder
{
    public function run(): void
    {
        SiteConfiguration::firstOrCreate([], [
            'site_name' => 'FoodBakery',
            'site_email' => 'support@foodbakery.com',
            'site_address' => 'Saint Jhon Doe Appartments, Sussex, UK.26AL565C',
            'site_phone' => '0555 55 55 55',
            'currency_code' => 'DZD',
            'currency_symbol' => 'DA',
            'currency_position' => 'right',
            'site_favicon' => null,
            'meta_description' => 'FoodBakery is a complete multi-restaurant platform offering online food ordering, table reservations, and delivery or pickup services. Browse diverse menus, discover top-rated local eateries, and book your table or meal with ease through a seamless, mobile-friendly experience.',
            'meta_keywords' => 'foodbakery, algeria, tiaret, foodbakery tiaret, food, Bakery, restaurant, multi-restaurant, platform, ordering, reservations, booking, menus, delivery, pickup, local eateries, mobile-friendly',
            'is_maintenance_mode' => false,
        ]);
    }
}
