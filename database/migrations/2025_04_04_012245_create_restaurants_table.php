<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('email')->unique();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->text('description')->nullable();
            $table->integer('capacity')->default(0);
            $table->text('services')->nullable();
            $table->text('payment_options')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('accepts_reservations')->default(false);
            $table->boolean('accepts_orders')->default(false);
            $table->string('cover_photo')->nullable();
            $table->string('restaurant_logo')->nullable();
            $table->decimal('minimum_order', 8, 2)->default(0);
            $table->decimal('maximum_order', 8, 2)->default(0);
            $table->decimal('delivery_fee', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
