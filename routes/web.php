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
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $data = ['comics' => config('comics')];
    return view('comics', $data);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comic', compact('comic'));
})->name('comic');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');
