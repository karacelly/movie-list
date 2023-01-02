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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('postLogin');
Route::post('/postLogin', [AuthController::class, 'login'])->name('postLogin');

Route::get('/register', [UserController::class, 'showRegisterPage'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');


Route::get('/watchlist', [WatchlistController::class, 'showWatchlistPage'])->name('movies');

Route::get('/profile', [UserController::class, 'showProfilePage'])->name('profile');
Route::post('/profile', [UserController::class, 'updateProfile'])->name('update.profile');
Route::post('/profile/updateImage', [UserController::class, 'updateImage'])->name('update.image');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Movies
Route::get('/movies', [MovieController::class, 'moviesPage'])->name('movies');
Route::get('/movies/{movie}', [MovieController::class, 'movieDetailPage'])->name('movie');


//Actors
Route::get('/actors', [ActorController::class, 'actorPage'])->name('actors');
Route::get('/actors/search', [ActorController::class, 'search'])->name('searchActor');
Route::get('/actor/{actor}', [ActorController::class, 'actorDetailPage'])->name('actor');

//admin router

Route::group(['middleware' => 'roleCheck'], function () {
    Route::get('/addMovie', [MovieController::class, 'addMoviePage'])->name('addMovie');
    Route::get('/editMovie/{movie}', [MovieController::class, 'editMoviePage'])->name('editMovie');

    Route::get('/addActor', [ActorController::class, 'addActorPage'])->name('addActor');
    Route::get('/editActor/{actor}', [ActorController::class, 'editActorPage'])->name('editActor');
    //Post
    Route::post('/addMovie', [MovieController::class, 'addMovie'])->name('addMovie.action');
    Route::post('/editMovie/{movie}', [MovieController::class, 'editMovie'])->name('editMovie.action');
    Route::post('/addActor', [ActorController::class, 'addActor'])->name('addActor.action');
    Route::post('/editActor/{actor}', [ActorController::class, 'editActor'])->name('editActor.action');

});
