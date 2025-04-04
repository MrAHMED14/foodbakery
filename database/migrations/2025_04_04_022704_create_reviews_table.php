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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade');
            $table->text('commentaire');
            $table->integer('overall_rating');
            $table->timestamps();
        });

        Schema::create('review_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('note_id')->constrained('reviews')->onDelete('cascade');
            $table->text('reponse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_responses');
        Schema::dropIfExists('reviews');
    }
};
