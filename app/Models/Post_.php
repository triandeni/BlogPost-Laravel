<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Trian deni",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus qui provident exercitationem quia id aperiam sapiente, eligendi quidem culpa fugiat natus excepturi est atque rerum nisi beatae commodi, cupiditate repellat!"
        ],
        
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "anggit kurniawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam dignissimos totam reiciendis, illum labore, repudiandae adipisci reprehenderit dolorem laborum esse ratione exercitationem, veniam ipsum ut commodi ullam omnis! Voluptate, atque!"
        ]
        ];

        public static function all()
        {
            return self::$blog_posts;
        }

        public static function find($slug)
        {
            $posts = self::$blog_posts;
            
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
        }
}
