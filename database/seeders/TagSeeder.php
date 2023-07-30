<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Popular',
            'New',
            'Production of Netflix',
            'Comedies',
            'Horrors',
            'About business',
            'Cosmos',
            'Documentaries',
            'Romance'

        ];

        foreach ($tags as $tag) {
            $obj = new Tag();
            $obj->name = $tag;
            $obj->save();
        }
    }
}
