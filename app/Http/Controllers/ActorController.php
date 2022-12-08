<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function actors_page(Request $request)
    {
        $actors = Actor::all();

        return view('actors', compact('actors'));
    }
}
