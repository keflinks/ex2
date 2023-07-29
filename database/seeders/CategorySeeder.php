<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Films',
            'Series',
            'Cartoons',
            'TV Shows',
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category;
            $obj->save();
        }
    }

}
