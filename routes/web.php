<?php

use App\Http\Controllers\DTController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
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

    // If user is already in a session, him/she is
    // not gonna be able to view this page
    if(auth()->user() != null) {
      return redirect('home');
    }

    // If user is not authenticated, then main page is showed
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function() {

  Route::get('/home', function(){
    return view('home');
  })->name('home');

  Route::resource('stadiums', StadiumController::class);
  Route::resource('teams', TeamController::class);
  Route::resource('player', PlayerController::class);
  Route::resource('dt', DTController::class);
});



