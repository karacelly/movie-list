<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function showWatchlistPage() {
      $watchlists = Watchlist::where('user_id', Auth::id())->paginate(4);

      return view('watchlist', compact('watchlists'));
    }

    public function update(Request $request, Watchlist $watchlist) {
      $status = $request->status;

      $watchlist->status = $status;
      $watchlist->save();

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
