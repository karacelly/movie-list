<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function actorPage(Request $request)
    {
        $actors = Actor::all();

        return view('actors', compact('actors'));
    }

    public function actorDetailPage(Request $request, Actor $actor)
    {
        return view('actor', compact('actor'));
    }
}
