<?php

namespace Database\Seeders;

use App\Models\MovieActor;
use Illuminate\Database\Seeder;

class MovieActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieActor::create([
            'actor_id' => 1,
            'movie_id' => 1,
            'character' => "Black Adam",
        ]);

        MovieActor::create([
            'actor_id' => 2,
            'movie_id' => 1,
            'character' => "Superman",
        ]);

        MovieActor::create([
            'actor_id' => 2,
            'movie_id' => 2,
            'character' => "Sherlock Holmes",
        ]);

        MovieActor::create([
            'actor_id' => 3,
            'movie_id' => 6,
            'character' => "Kim Taeho",
        ]);

        MovieActor::create([
            'actor_id' => 4,
            'movie_id' => 8,
            'character' => "Erwin",
        ]);

        MovieActor::create([
            'actor_id' => 4,
            'movie_id' => 7,
            'character' => "Erwin",
        ]);

        MovieActor::create([
            'actor_id' => 5,
            'movie_id' => 7,
            'character' => "Natalie",
        ]);

        MovieActor::create([
            'actor_id' => 6,
            'movie_id' => 8,
            'character' => "Yohan",
        ]);

        MovieActor::create([
            'actor_id' => 6,
            'movie_id' => 7,
            'character' => "Yohan",
        ]);

        MovieActor::create([
            'actor_id' => 7,
            'movie_id' => 4,
            'character' => "Michelle Jones (MJ)",
        ]);

        MovieActor::create([
            'actor_id' => 7,
            'movie_id' => 5,
            'character' => "Michelle Jones (MJ)",
        ]);

        MovieActor::create([
            'actor_id' => 8,
            'movie_id' => 3,
            'character' => "Nathan Drake",
        ]);

        MovieActor::create([
            'actor_id' => 8,
            'movie_id' => 4,
            'character' => "Peter Parker",
        ]);

        MovieActor::create([
            'actor_id' => 8,
            'movie_id' => 5,
            'character' => "Peter Parker",
        ]);
    }
}
