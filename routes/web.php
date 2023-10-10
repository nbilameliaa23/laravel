<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Nabila Amelia',
        'email' => 'nblamelia12@gmail.com',
        'image' => 'ameliaa.jpeg'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
route::get('posts/{slug}', [PostController::class, 'show']);