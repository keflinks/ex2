<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $location = DB::table('locations')->inRandomOrder()->first();
        $year = DB::table('years')->inRandomOrder()->first();
        $rating = DB::table('ratings')->inRandomOrder()->first();
        $updatedAt = fake()->dateTimeBetween('-3 year', '-1 week');
        return [
            'category_id' => $category->id,
            'location_id' => $location->id,
            'year_id' => $year->id,
            'rating_id' => $rating->id,
            'name' => fake()->unique()->jobTitle(),
            'description' => fake()->paragraph(),
            'downloaded' => rand(0, 6000),
            'addtowatchlist' => fake()->boolean(0),
            'updated_at' => $updatedAt,
        ];
    }
}
