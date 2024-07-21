<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
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
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Fiki Aprian',
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
        return view('post', ['title' =>'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
        return view('posts', ['title' =>'Article by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
    ]);
});

