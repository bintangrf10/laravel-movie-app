<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength'
        ],

        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ],
        
        [
            'id' => 4,
            'title' => 'Konosuba',
            'poster' => 'movie-05.jpg',
            'genre' => 'Fantasy',
            'synopsis' => 'Kazuma Sato is a video game-loving shut in or at least he was, right up until a humiliating traffic accident brought his young life to an untimely end... is what youd think. But after his death, a beautiful young girl calling herself a goddess offers him the chance to be reborn in another world.'
        ],
        
        [
            'id' => 5,
            'title' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'genre' => 'Drama',
            'synopsis' => '
            A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together.'
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
