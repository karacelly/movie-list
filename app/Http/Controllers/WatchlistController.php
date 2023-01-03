<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function showWatchlistPage() {
      $watchlist = Watchlist::where('user_id', Auth::id())->paginate(4);

      return view('watchlist', compact('watchlist'));
    }

    public function search(Request $request)
    {
        $search = $request->query('query');

        $watchlist = Watchlist::whereHas('movie', function ($query) use ($search) {
            $query->where('title', 'like', '%'.$search.'%');
        })->paginate(4);

        // dd($watchlist);

        return view('watchlist', compact('watchlist'));
    }
}
