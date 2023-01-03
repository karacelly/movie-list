<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    public function showWatchlistPage() {
      $watchlist = Watchlist::where('user_id', Auth::id())->paginate(4);
    //   dd($watchlist[0]->movie);

      return view('watchlist', compact('watchlist'));
    }
}
