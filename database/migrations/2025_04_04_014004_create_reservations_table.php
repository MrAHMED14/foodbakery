<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade');
            $table->dateTime('reservation_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('session_duration')->default(90); // 90 minutes
            $table->integer('nbr_table')->default(1);
            $table->enum('status', ['Processing', 'Cancelled', 'Completed'])->default('Processing');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
