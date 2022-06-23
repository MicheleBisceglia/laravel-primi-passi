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
    $data = [
        'name' => 'Michele',
        'lastname' => 'Bisceglia',
        'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
        'isLoggedIn' => true,
    ];
    return view('info', $data);
})->name('info');

Route::get('/favorite-us', function () {
    $data = [
            'name' => 'Michele',
            'lastname' => 'Bisceglia',
            'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
            'isLoggedIn' => true,
        'games' => [
            [
            'name' => 'GTA1',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
        [
            'name' => 'GTA2',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
        [
            'name' => 'GTA3',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
         ],
        [
            'name' => 'GTA4',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
        [
            'name' => 'GTA5',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
        [
            'name' => 'GTA6',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
    ]
];
    return view('favorite', $data) ;
})->name('favorite');

Route::get('/contacts-us', function () {
    $data = [
        'name' => 'Michele',
        'lastname' => 'Bisceglia',
        'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
        'isLoggedIn' => true,
    ];
    return view('contacts', $data);
})->name('contacts');

Route::get('/user-us', function () {
    $data = [
        'name' => 'Michele',
        'lastname' => 'Bisceglia',
        'img' => 'https://it.videogamer.com/wp-content/uploads/2017/10/gran-turismo-sport-keyart-1-e1508203779494.png',
        'isLoggedIn' => true,
    ];
    return view('user',$data);
})->name('user');


