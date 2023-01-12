<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WatchlistController extends Controller
{
    public function showWatchlistPage() {
      $watchlists = Watchlist::where('user_id', Auth::id())->paginate(4);

      return view('watchlist', compact('watchlists'));
    }

    public function insert(Request $request, Movie $movie) {

        Watchlist::firstOrCreate(['movie_id' => $movie->id, 'user_id' => $movie->id, 'user_id' => Auth::id(), 'status' => 'Planning']);

        return back()->withInput();
    }

    public function update(Request $request, Movie $movie) {
        if($request->only('status')['status'] == 'Remove') {
            DB::table('watchlists')->where(['user_id' => Auth::id(), 'movie_id' => $movie->id])->delete();
        } else {
            DB::table('watchlists')->where(['user_id' => Auth::id(), 'movie_id' => $movie->id])->update([
                'status' => $request->only('status')['status'],
            ]);
        }

        return back();
    }

    public function search(Request $request)
    {
        $search = $request->query('query');

        $watchlists = Watchlist::whereHas('movie', function ($query) use ($search) {
            $query->where('title', 'like', '%'.$search.'%');
        })->paginate(4);

        return view('watchlist', compact('watchlists'));
    }

    public function sort(Request $request)
    {
        $sort = $request->query('sort');

        $watchlists = Watchlist::where('user_id', Auth::id())->paginate(4);

        if($sort != 0){
            $watchlists = Watchlist::where('user_id', Auth::id())->where('status', $sort)->paginate(4);
        }

        return view('watchlist', compact('watchlists'));
    }
}
