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
        Schema::create('film_actors', function (Blueprint $table) {
            $table->foreignId('film_id')->references('id')->on('films')->cascadeOnDelete();
            $table->foreignId('actor_id')->references('id')->on('actors')->cascadeOnDelete();
            $table->primary(['film_id', 'actor_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_actors');
    }
};
