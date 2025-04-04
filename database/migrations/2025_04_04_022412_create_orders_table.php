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
            $table->date('date_commande');
            $table->string('status');
            $table->decimal('total', 8, 2);
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->string('type_commande');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->date('payment_date');
            $table->timestamps();
        });

        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('plat_id')->constrained('dishes');
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
