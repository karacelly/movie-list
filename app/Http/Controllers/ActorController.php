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

    public function addActorPage()
    {
        return view('addActor');
    }

    public function addActor(Request $request) {
      $request->validate([
          'name' => 'required|min:3',
          'gender' => 'required|not_in:null',
          'biography' => 'required|min:10',
          'dob' => 'required',
          'birthplace' => 'required',
          'img_url' => 'required|mimes:jpeg,jpg,png,gif',
          'popularity' => 'required|numeric',
      ]);
      $file = $request->file('img_url');
      $data = $request->only('name', 'gender', 'biography', 'dob', 'birthplace', 'popularity');
      $data['img_url'] = $file->getClientOriginalName();

      $flower = Actor::create($data);

      $flower->save();

      if($flower){
          $file->move(public_path('/images/actors'), $data['img_url']);
          return redirect()->back()->with('success', 'Actor added!');
      };

      return back()->withInput();
    }
}
