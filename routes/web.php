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

    \Illuminate\Support\Facades\Mail::send(new \App\Mail\TestMail());

    return view('welcome');
});

// $cinemas = \App\Models\Cinema::all();

// foreach ($cinemas as $cinema){
//     echo 'Cinema: ' . $cinema['name'].'<br>';
//     echo '<b>Movies:</b><br>';
//     foreach ($cinema->movies as $movie) {
//         echo $movie['name'].'<br>';
//     }

//     echo '-------------<br>';
// }


// $movies = \App\Models\Movie::all();

// foreach ($movies as $movie){
//     echo 'Movie name: ' . $movie['name'].'<br>';
//     echo '<b>Cinemas:</b><br>';
//     foreach ($movie->cinemas as $cinema) {
//         echo $cinema['name'].'<br>';
//     }

//     echo '-------------<br>';
// }
