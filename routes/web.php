<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        "title" => "Home",
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Marwan Hakim",
        "email" => "Marwan@mail.com",
        "image" => "me.jpg",
    ]);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all(),
    ]);
});
