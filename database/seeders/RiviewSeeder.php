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
        $reviews = [
            ['movie_id' => 1, 'user_id' => 1, 'review' => 'Great movie!', 'rating' => 5, 'date' => now()],
            ['movie_id' => 1, 'user_id' => 2, 'review' => 'Not bad', 'rating' => 3, 'date' => now()],
            ['movie_id' => 2, 'user_id' => 1, 'review' => 'Amazing storyline', 'rating' => 4, 'date' => now()],
            ['movie_id' => 2, 'user_id' => 3, 'review' => 'Could be better', 'rating' => 2, 'date' => now()],
            ['movie_id' => 3, 'user_id' => 2, 'review' => 'Loved the action scenes!', 'rating' => 5, 'date' => now()],
        ];
    }
}
