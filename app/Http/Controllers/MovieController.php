<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function moviesPage(Request $request)
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function indexPage(Request $request)
    {
        $movies = Movie::all();
        $genres = Genre::all();
        $famous = Movie::withCount('watchlist')->orderBy('watchlist_count', 'desc')->take(5)->get();
        $random = Movie::all()->random(3);

        if($request->has('g')) {
            $genre = $request->query('g');

            $movies = Movie::whereHas('genres', function($query) use ($genre) {
                $query->where('genre_id', '=', $genre);
            });
        }

        if($request->has('s')) {
            $sort = $request->query('s');
            if($sort == 0) {
                $movies = Movie::orderBy('release_date', 'DESC')->get();
            } else if($sort == 1) {
                $movies= Movie::orderBy('title', 'ASC')->get();
            } else if($sort == 2) {
                $movies= Movie::orderBy('title', 'DESC')->get();
            }
        }
        if($request->has('g') || $request->has('g')) {
            $movies = $movies->get();
        }

        return view('index', compact('movies', 'genres', 'famous','random'));
    }



    public function search(Request $request)
    {
        $search = $request->query('q');

        $movies = Movie::where('title', 'LIKE', '%'.$search.'%')->get();

        return view('movies', compact('movies'));
    }

    public function movieDetailPage(Request $request, Movie $movie)
    {
        $more = Movie::all()->random(5);
        return view('movieDetail', compact('movie','more'));
    }

    public function addMoviePage()
    {
        $actors = Actor::all();
        return view('addMovie', compact('actors'));
    }

    public function editMoviePage(Request $request, Movie $movie)
    {
        $actors = Actor::all();
        return view('editMovie', compact('actors', 'movie'));
    }

    public function addMovie(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'genre' => 'required|not_in:null',
            'description' => 'required|min:10',
            'release_date' => 'required',
            'director' => 'required|min:3',
            'img_url' => 'required|mimes:jpeg,jpg,png,gif',
            'background_url' => 'required|mimes:jpeg,jpg,png,gif'
        ]);
        $file = $request->file('img_url');
        $file2 = $request->file('background_url');
        $data = $request->only('title', 'genre', 'description', 'director', 'release_date');
        $data['img_url'] = $file->getClientOriginalName();
        $data['background_url'] = $file2->getClientOriginalName();


        $movie = Movie::create($data);

        $movie->save();

        if ($movie) {
            $file->move(public_path('/images/movies/image'), $data['img_url']);
            $file2->move(public_path('/images/movies/background'), $data['background_url']);
            return redirect()->intended('/movies')->with('success', 'Succesfully added new movie');
        };

        return back()->withInput();
    }
    public function editMovie(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required|min:3',
            'genre' => 'required|not_in:null',
            'description' => 'required|min:10',
            'release_date' => 'required',
            'director' => 'required|min:3',
            'img_url' => 'required|mimes:jpeg,jpg,png,gif',
            'background_url' => 'required|mimes:jpeg,jpg,png,gif'
        ]);
        $file = $request->file('img_url');
        $file2 = $request->file('background_url');
        $data = $request->only('title', 'genre', 'description', 'director', 'release_date');
        $data['img_url'] = $file->getClientOriginalName();
        $data['background_url'] = $file2->getClientOriginalName();

        $movie->title = $data['title'];
        $movie->genre = $data['genre'];
        $movie->description = $data['description'];
        $movie->release_date = $data['release_date'];
        $movie->director = $data['director'];
        $movie->img_url = $data['img_url'];
        $movie->background_url = $data['background_url'];

        $movie->save();

        if ($movie) {
            $file->move(public_path('/images/movies/image'), $data['img_url']);
            $file2->move(public_path('/images/movies/background'), $data['background_url']);
            return redirect()->route('movie', $movie)->with('success','Movie data edited.');
        };

        return back()->withInput();
    }
}
