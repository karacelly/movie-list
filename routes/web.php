<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post('/postLogin', [UserController::class, 'postLogin'])->name('postLogin');

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::post('/profile', [UserController::class, 'update_profile'])->name('update.profile');
Route::post('/profile/updateImage', [UserController::class, 'update_image'])->name('update.image');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/actors', [ActorController::class, 'actorPage'])->name('actors');
Route::get('/actor/{actor}', [ActorController::class, 'actorDetailPage'])->name('actor');

//admin router

Route::group(['middleware' => 'roleCheck'], function () {
    Route::get('/addMovie', [UserController::class, 'movie_page']);
    Route::get('/addActor', [ActorController::class, 'addActorPage'])->name('addActor');
    Route::get('/editActor/{actor}', [ActorController::class, 'editActorPage'])->name('editActor');

    Route::post('/addActor', [ActorController::class, 'addActor'])->name('addActor.action');
    Route::post('/editActor/{actor}', [ActorController::class, 'editActor'])->name('editActor.action');
});
