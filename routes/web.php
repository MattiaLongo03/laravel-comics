<?php

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
    $comics = config('comics');
    return view('guest.characters', [
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('guest.comics',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $comics = config('comics');
    return view('guest.movies',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('movies');

Route::get('/tv', function () {
    $comics = config('comics');
    return view('guest.tv',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('tv');

Route::get('/games', function () {
    $comics = config('comics');
    return view('guest.games',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('comics');
    return view('guest.collectibles',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('comics');
    return view('guest.videos',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('videos');

Route::get('/fans', function () {
    $comics = config('comics');
    return view('guest.fans',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('fans');

Route::get('/news', function () {
    $comics = config('comics');
    return view('guest.news',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('news');

Route::get('/shop', function () {
    $comics = config('comics');
    return view('guest.shop',[
        'menu'   => config('menu'),
        'comics' => $comics,
    ]);
})->name('shop');
