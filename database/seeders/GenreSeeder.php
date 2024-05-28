<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ]);

        Genre::create([
            'name' => 'School',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ]);
    }
}
