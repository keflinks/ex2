<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'ENG',
            'RUS',
            'TKM',
        ];

        foreach ($languages as $language) {
            $obj = new Language();
            $obj->name = $language;
            $obj->save();
        }
    }
}
