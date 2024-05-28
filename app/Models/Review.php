<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Binbin',
            'rating' => '1000/10',
            'date' => '10 november 2023',
        ],

        [
            'id' => 2,
            'movie' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Ramadhan',
            'rating' => '4/10',
            'date' => '17 agustus 2023',
        ],
        
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Chaenwo',
            'rating' => '1/10',
            'date' => '1 januari 2024',
        ],
        
        [
            'id' => 4,
            'movie' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user' => 'Jeno',
            'rating' => '3/10',
            'date' => '25 desember 2022',
        ],
        
        [
            'id' => 5,
            'movie' => 'Konosuba',
            'poster' => 'movie-05.jpg',
            'user' => 'Haecan',
            'rating' => '7/10',
            'date' => '15 april 2024',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
