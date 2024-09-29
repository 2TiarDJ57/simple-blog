<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "author" => "Doddy",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aliquam molestias debitis rem molestiae eius aspernatur vitae facere mollitia accusantium rerum exercitationem beatae, labore architecto deleniti sit non. Quas, explicabo."
        ],

        [
            "title" => "Judul Tulisan Kedua",
            "author" => "Bachtiar Dwi Julianto",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aliquam molestias debitis rem molestiae eius aspernatur vitae facere mollitia accusantium rerum exercitationem beatae, labore architecto deleniti sit non. Quas, explicabo."
        ]
        
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }


    public static function find($slug){
        $posts = static::all();

        

        return $posts->firstwhere('slug', $slug);
    }
}

?>