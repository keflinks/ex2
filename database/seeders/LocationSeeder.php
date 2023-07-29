<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'USA'],
            ['name' => 'Russia'],
            ['name' => 'Germany'],
            ['name' => 'China'],
            ['name' => 'France'],
            ['name' => 'Colombia'],
            ['name' => 'Korea'],
            ['name' => 'Canada'],
            ['name' => 'India'],
            ['name' => 'Japan'],
            ['name' => 'Turkey'],
            ['name' => 'UK'],
        ];

        foreach ($locations as $location) {
            $obj = new Location();
            $obj->name = $location['name'];
            $obj->save();
        }
    }
}
