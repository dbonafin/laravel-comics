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
    return view('homepage');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');

    $data = [
        'comics' => $comics,
    ];

    return view('comics', $data);
})->name('comics');

Route::get('/single-product/{id}', function ($id) {
    //Get the comics array and build the active item array
    $comics = config('comics');
    $active_item = [];

    foreach($comics as $item) {
        if($item['id'] == $id) {
            $active_item  = $item;
        }
    }

    $data = [
        'active_item' =>  $active_item
    ];

    return view('single-product', $data);
})->name('single_product'); 

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');