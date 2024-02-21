<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnimeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/search',[AnimeController::class,'search'])->name('search');

Route::get('/lista-anime',[AnimeController::class,'listaAnime'])->name('anime-list');

Route::get('animeById',[PageController::class,'animeById'])->name('animeById');