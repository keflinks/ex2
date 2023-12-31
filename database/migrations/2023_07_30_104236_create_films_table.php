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
        Schema::create('films' , function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')->references('id')->on('locations')->cascadeOnDelete();
            $table->unsignedBigInteger('year_id')->index();
            $table->foreign('year_id')->references('id')->on('years')->cascadeOnDelete();
            $table->unsignedBigInteger('rating_id')->index();
            $table->foreign('rating_id')->references('id')->on('ratings')->cascadeOnDelete();
            $table->unsignedBigInteger('genre_id')->index();
            $table->foreign('genre_id')->references('id')->on('genres')->cascadeOnDelete();
            $table->unsignedBigInteger('tag_id')->index();
            $table->foreign('tag_id')->references('id')->on('tags')->cascadeOnDelete();
            $table->unsignedBigInteger('actor_id')->index();
            $table->foreign('actor_id')->references('id')->on('actors')->cascadeOnDelete();
            $table->unsignedBigInteger('language_id')->index();
            $table->foreign('language_id')->references('id')->on('languages')->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('downloaded')->default(0);
            $table->boolean('addtowatchlist')->default(0);
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
