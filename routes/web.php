<?php

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
        'posts' => [
            [
                'title' => 'Judul Post Pertama',
                'slug' => 'judul-post-pertama',
                'author' => 'Fiki Aprian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ea est consequuntur nam
                vero provident vitae
                nostrum ullam qui consectetur, sunt sed rem voluptatem, porro nihil alias excepturi at reprehenderit.
                ',
            ],
            [
                'title' => 'Judul Post Kedua',
                'slug' => 'judul-post-kedua',
                'author' => 'Fiki Aprian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ea est consequuntur nam
                vero provident vitae
                nostrum ullam qui consectetur, sunt sed rem voluptatem, porro nihil alias excepturi at reprehenderit.
                ',
            ],
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
            [
                'title' => 'Judul Post Pertama',
                'slug' => 'judul-post-pertama',
                'author' => 'Fiki Aprian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ea est consequuntur nam
                vero provident vitae
                nostrum ullam qui consectetur, sunt sed rem voluptatem, porro nihil alias excepturi at reprehenderit.
                ',
            ],
            [
                'title' => 'Judul Post Kedua',
                'slug' => 'judul-post-kedua',
                'author' => 'Fiki Aprian',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ea est consequuntur nam
                vero provident vitae
                nostrum ullam qui consectetur, sunt sed rem voluptatem, porro nihil alias excepturi at reprehenderit.
                ',
            ],
        ];
        $post = Arr::first($posts, function($post) use($slug){
            return $post['slug'] == $slug;
        });
        return view('post', ['title' =>'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
    ]);
});

