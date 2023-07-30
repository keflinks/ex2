<?php

namespace Database\Factories;


use App\Models\Actor;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{

    public function definition(): array
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        $year = DB::table('years')->inRandomOrder()->first();
        $rating = DB::table('ratings')->inRandomOrder()->first();
        $genre = DB::table('genres')->inRandomOrder()->first();
        $tag = DB::table('tags')->inRandomOrder()->first();
        $actor = DB::table('actors')->inRandomOrder()->first();
        $language = DB::table('languages')->inRandomOrder()->first();
        $updatedAt = fake()->dateTimeBetween('-3 year', '-1 week');
        return [
            'category_id' => $category->id,
            'location_id' => $location->id,
            'year_id' => $year->id,
            'rating_id' => $rating->id,
            'genre_id' => $genre->id,
            'tag_id' => $tag->id,
            'actor_id' => $actor->id,
            'language_id' => $language->id,
            'image' => '',
            'name' => fake()->unique()->jobTitle(),
            'description' => fake()->paragraph(),
            'downloaded' => rand(0, 6000),
            'addtowatchlist' => fake()->boolean(0),
            'updated_at' => $updatedAt,
        ];
    }
}
