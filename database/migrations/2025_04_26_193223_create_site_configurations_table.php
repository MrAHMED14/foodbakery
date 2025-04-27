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
        Schema::create('site_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('currency_code')->default('USD');
            $table->string('currency_symbol')->default('$');
            $table->enum('currency_position', ['left', 'right'])->default('left');
            $table->string('site_favicon')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->boolean('is_maintenance_mode')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_configurations');
    }
};
