<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ratings = range(1.0, 10);

        foreach ($ratings as $rating) {
            $obj = new Rating();
            $obj->name = $rating;
            $obj->save();
        }
    }
}
