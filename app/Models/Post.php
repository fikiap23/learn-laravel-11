<?php 
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return  [
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
    }

    public static function findOneBySlug($slug){
        $posts = static::all();
        return Arr::first($posts, function($p) use ($slug){
            return $p['slug'] === $slug;
        });
    }
}
?>