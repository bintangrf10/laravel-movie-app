<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $genres = [
            ['name' => 'Action', 'description' => 'Action-packed movies'],
            ['name' => 'Comedy', 'description' => 'Laugh out loud comedies'],
            ['name' => 'Drama', 'description' => 'Emotional and gripping dramas'],
            ['name' => 'Horror', 'description' => 'Scary and thrilling horror films'],
            ['name' => 'Sci-Fi', 'description' => 'Science fiction adventures'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
