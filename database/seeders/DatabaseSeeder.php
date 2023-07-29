<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            LocationSeeder::class,
            YearSeeder::class,
            RatingSeeder::class,
            LanguageSeeder::class,
            GenreSeeder::class,
        ]);
        \App\Models\Actor::factory(250)->create();
        \App\Models\Film::factory(600)->create();
    }
}
