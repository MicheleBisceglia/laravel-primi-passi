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
    $data = [
        'name' => 'Michele',
        'lastname' => 'Bisceglia',
        'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
        'isLoggedIn' => true,
    ];
    return view('home', $data) ;
})->name('home');

Route::get('/info-us', function () {
    return view('info');
})->name('info');

Route::get('/favorite-us', function () {
    $data = [
        'games' => [
            [
                'name' => 'GTA1',
                'publisher' => 'Rockstar games',
                'genre' => 'Action',
            ],
            [
                'name' => 'GTA2',
                'publisher' => 'Rockstar games',
                'genre' => 'Action',
            ],
            [
                'name' => 'GTA3',
                'publisher' => 'Rockstar games',
                'genre' => 'Action',
            ],
            [
                'name' => 'GTA4',
                'publisher' => 'Rockstar games',
                'genre' => 'Action',
            ],
            [
                'name' => 'GTA5',
                'publisher' => 'Rockstar games',
                'genre' => 'Action',
            ],
        ],
    ];
    return view('favorite', $data) ;
})->name('favorite');

Route::get('/contacts-us', function () {
    return view('contacts');
})->name('contacts');

Route::get('/user-us', function () {
    return view('user');
})->name('user');


