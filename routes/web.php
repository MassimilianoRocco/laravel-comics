<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', ['store' => config("store")]);
});


Route::get('/home', function () {
    return view('home', ['store' => config("store")]);
})->name("section_home");

Route::get('/about', function () {
    return view('about',  ['store' => config("store")]);
})->name("section_about");


Route::get('/home/{index}', function ($index) {
    $comicBook = config("store")[$index];

    return view('/singleComic', compact('comicBook'));
})->name("section_singleComic");
