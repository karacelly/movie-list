<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'indexPage'])->name('movies');

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('postLogin');
Route::post('/postLogin', [AuthController::class, 'login'])->name('postLogin');

Route::get('/register', [UserController::class, 'showRegisterPage'])->name('register');
Route::post('register', [UserController::class, 'register'])->name('register.action');

Route::get('/movies', [MovieController::class, 'showMoviesPage'])->name('movies');

Route::get('/genre/{genre}', [MovieController::class, 'genresPage'])->name('genre');

//Movies
Route::get('/movies', [MovieController::class, 'moviesPage'])->name('movies');
Route::get('/movies/search', [MovieController::class, 'search'])->name('searchMovie');
Route::get('/movie/{movie}', [MovieController::class, 'movieDetailPage'])->name('movie');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Actors
Route::get('/actors', [ActorController::class, 'actorPage'])->name('actors');
Route::get('/actors/search', [ActorController::class, 'search'])->name('searchActor');
Route::get('/actor/{actor}', [ActorController::class, 'actorDetailPage'])->name('actor');

//user route
Route::group(['middleware' => 'role:0'], function () {
  Route::get('/profile', [UserController::class, 'showProfilePage'])->name('profile');
  Route::post('/profile', [UserController::class, 'updateProfile'])->name('update.profile');
  Route::post('/profile/updateImage', [UserController::class, 'updateImage'])->name('update.image');

  Route::get('/watchlist', [WatchlistController::class, 'showWatchlistPage'])->name('watchlist');
  Route::get('/watchlist/search', [WatchlistController::class, 'search'])->name('searchWatchlist');
  Route::get('/watchlist/sort', [WatchlistController::class, 'sort'])->name('sortWatchlist');
  Route::post('/watchlist/update/{movie}', [WatchlistController::class, 'update'])->name('updateWatchlist');
  Route::post('/watchlist/add/{movie}', [WatchlistController::class, 'insert'])->name('addWatchlist');
});

//admin router

Route::group(['middleware' => 'role:1'], function () {
    Route::get('/addMovie', [MovieController::class, 'addMoviePage']);
    Route::get('/addActor', [ActorController::class, 'addActorPage'])->name('addActor');
    Route::get('/editActor/{actor}', [ActorController::class, 'editActorPage'])->name('editActor');
    Route::get('/editMovie/{movie}', [MovieController::class, 'editMoviePage'])->name('editMovie');

    //Post
    Route::post('/addMovie', [MovieController::class, 'addMovie'])->name('addMovie.action');
    Route::post('/editMovie/{movie}', [MovieController::class, 'editMovie'])->name('editMovie.action');
    Route::post('/removeMovie/{movie}', [MovieController::class, 'removeMovie'])->name('removeMovie.action');

    Route::post('/addActor', [ActorController::class, 'addActor'])->name('addActor.action');
    Route::post('/editActor/{actor}', [ActorController::class, 'editActor'])->name('editActor.action');
    Route::post('/removeActor/{actor}', [ActorController::class, 'removeActor'])->name('removeActor.action');

});

