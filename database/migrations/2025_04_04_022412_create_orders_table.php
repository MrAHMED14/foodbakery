<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->date('order_date');
            $table->enum('status', ['Processing', 'Cancelled', 'Completed'])->default('Processing');
            $table->decimal('total', 8, 2);
            $table->string('address');
            $table->string('commune');
            $table->string('wilaya');
            $table->string('order_type');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->date('payment_date');
            $table->timestamps();
        });

        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('dish_id')->constrained('dishes')->onDelete('cascade');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
        Schema::dropIfExists('orders');
    }
};
