<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Seeder;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 1,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 2,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 3,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 4,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 5,
          'status' => 'Planning',
        ]);
                Watchlist::create([
          'user_id' => 2,
          'movie_id' => 1,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 2,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 3,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 4,
          'status' => 'Planning',
        ]);
        Watchlist::create([
          'user_id' => 2,
          'movie_id' => 5,
          'status' => 'Planning',
        ]);
        //ID 3
        Watchlist::create([
            'user_id' => 3,
            'movie_id' => 1,
            'status' => 'Planning',
          ]);
          Watchlist::create([
            'user_id' => 3,
            'movie_id' => 2,
            'status' => 'Planning',
          ]);
          Watchlist::create([
            'user_id' => 3,
            'movie_id' => 3,
            'status' => 'Planning',
          ]);
          Watchlist::create([
            'user_id' => 3,
            'movie_id' => 4,
            'status' => 'Planning',
          ]);
          Watchlist::create([
            'user_id' => 3,
            'movie_id' => 5,
            'status' => 'Planning',
          ]);
    }
}
