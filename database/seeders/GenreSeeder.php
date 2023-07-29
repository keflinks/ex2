<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Action',
            'Horror',
            'Documentary',
            'Comedy',
            'Drama',
            'Western',
            'Adventure',
            'Romance',
            'Fantasy',
            'Thriller',
            'Crime',
            'Science fiction',
        ];

        foreach ($genres as $genre) {
            $obj = new Genre();
            $obj->name = $genre;
            $obj->save();
        }
    }
}
