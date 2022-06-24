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
            'name' => 'GTA',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images7.alphacoders.com/421/421641.jpg'
        ],
        [
            'name' => 'Gran Turismo',
            'publisher' => 'Sony',
            'genre' => 'Race',
            'poster' => 'https://www.gran-turismo.com/images/c/i1clJ0iL7OaXd.jpg'
        ],
        [
            'name' => 'Red Dead Redemption',
            'publisher' => 'Rockstar',
            'genre' => 'Action',
            'poster' => 'https://images.ctfassets.net/wn7ipiv9ue5v/6ZSV0CNlsw4xhNcCNK4haj/82d0f54cf5010ab9f05a5e5558d3b4f0/RDR2_HeroSquare_1080x1080.jpg'
         ],
        [
            'name' => 'F1 22',
            'publisher' => 'EA sport',
            'genre' => 'Race',
            'poster' => 'https://media.contentapi.ea.com/content/dam/ea/f1/f1-2022/common/f1-22-announce.adapt.crop16x9.575p.'
        ],
        [
            'name' => 'Horizon Zero Down',
            'publisher' => 'Sony',
            'genre' => 'Action',
            'poster' => 'https://lh3.googleusercontent.com/xxuhdcf85QVGXh9GVfFCCjJP1GRmVVnz273Ln6vMAPT27WJoNNU8qKyC269leCLdUwqM-uC_91hXjhqiRvSBrMnMufc=w640-h400-e365-rj-sc0x00ffffff'
        ],
        [
            'name' => 'FIFA22',
            'publisher' => 'EA sports',
            'genre' => 'Sport',
            'poster' => 'https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_FIFA22NintendoSwitchLegacyEdition_image1600w.jpg'
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
        'username' => 'Mikael22',
        'games_played' => '12',
        'trophies' => '147'
    ];
    return view('user',$data);
})->name('user');


