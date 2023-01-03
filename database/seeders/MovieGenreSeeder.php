<?php

namespace Database\Seeders;

use App\Models\MovieGenre;
use Illuminate\Database\Seeder;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieGenre::create([
            'genre_id' => 1,
            'movie_id' => 1,
        ]);
        MovieGenre::create([
            'genre_id' => 5,
            'movie_id' => 1,
        ]);
        MovieGenre::create([
            'genre_id' => 3,
            'movie_id' => 2,
        ]);
        MovieGenre::create([
            'genre_id' => 4,
            'movie_id' => 2,
        ]);
        MovieGenre::create([
            'genre_id' => 9,
            'movie_id' => 3,
        ]);
        MovieGenre::create([
            'genre_id' => 10,
            'movie_id' => 3,
        ]);
        MovieGenre::create([
            'genre_id' => 3,
            'movie_id' => 4,
        ]);
        MovieGenre::create([
            'genre_id' => 6,
            'movie_id' => 5,
        ]);
    }
}
