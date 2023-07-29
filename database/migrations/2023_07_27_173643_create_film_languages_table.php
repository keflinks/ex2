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
        Schema::create('film_languages', function (Blueprint $table) {
            $table->foreignId('language_id')->references('id')->on('languages')->cascadeOnDelete();
            $table->foreignId('film_id')->references('id')->on('films')->cascadeOnDelete();
            $table->primary(['language_id', 'film_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_languages');
    }
};
