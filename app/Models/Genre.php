<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'description' => 'Jojo Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength'
        ],

        [
            'id' => 2,
            'name' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        
        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.'
        ],
        
        [
            'id' => 4,
            'name' => 'Konosuba',
            'poster' => 'movie-05.jpg',
            'description' => 'Kazuma Sato is a video game-loving shut in or at least he was, right up until a humiliating traffic accident brought his young life to an untimely end... is what youd think. But after his death, a beautiful young girl calling herself a goddess offers him the chance to be reborn in another world.'
        ],
        
        [
            'id' => 5,
            'name' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'description' => '
            A spy on an undercover mission gets married and adopts a child as part of his cover. His wife and daughter have secrets of their own, and all three must strive to keep together.'
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
