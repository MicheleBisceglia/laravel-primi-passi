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
/*Home*/
Route::get('/', function () {
    return view('home') ;
})->name('home');
/* /Home */

/*Info*/
Route::get('/info-us', function () {
    return view('info');
})->name('info');
/* /Info */

/* Preferiti */
Route::get('/favorite-us', function () {
    $data = [
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
            'poster' => 'https://image.api.playstation.com/vulcan/img/rnd/202009/2923/LyLrdlIfqiVzvynWJGtNfbU8.png'
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
/* /Preferiti */

/* Assistenza */
Route::get('/contacts-us', function () {
    return view('contacts');
})->name('contacts');
/* /Assistenza */

/* Utente */
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
/* /Utente */


