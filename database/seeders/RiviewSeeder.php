<?php

namespace Database\Seeders;

App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create ([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Bintang',
            'rating' => '9.5',
            'date' => '10 nov 2023'
        ]);

        Review::create ([
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Ardi',
            'rating' => '8.2',
            'date' => '13 Jan 2020'
        ]);

        Review::create ([
            'id' => 1,
            'title' => 'Wind Breaker',
            'poster' => 'movie-01.jpg',
            'user' => 'Azka',
            'rating' => '7.5',
            'date' => '6 May 2021'
        ]);

        Review::create ([
            'id' => 1,
            'title' => '',
            'poster' => '',
            'user' => '',
            'rating' => '',
            'date' => ''
        ]);
    }
}
