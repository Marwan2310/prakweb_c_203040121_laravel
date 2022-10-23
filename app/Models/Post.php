<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [

            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marwan Hakim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta,
        quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit eos corrupti nemo
        suscipit omnis ab modi veritatis dolor iure est dolore, accusamus voluptate assumenda
        aspernatur? Alias, exercitationem possimus? Fugiat autem ratione, sunt deserunt similique
        dolorum saepe deleniti mollitia natus unde labore veritatis non dicta cupiditate illo,
        maiores dolorem? Molestias quod dolor consectetur. Inventore exercitationem eos impedit
        perferendis ipsa est obcaecati odit. Minus aspernatur quos incidunt minima ea, eos quis
         fuga tenetur neque aliquid, nemo cupiditate laudantium? Maiores ut provident eligendi?."
        ],

        [


            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Amos",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Tempore dicta, quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit
        eos corrupti nemo suscipit omnis ab modi veritatis dolor iure est dolore, accusamus
         voluptate assumenda aspernatur? Alias, exercitationem possimus? Fugiat autem ratione,
         sunt deserunt similique dolorum saepe deleniti mollitia natus unde labore veritatis
         non dicta cupiditate illo, maiores dolorem? Molestias quod dolor consectetur. Inventore
         exercitationem eos impedit perferendis ipsa est obcaecati odit. Minus aspernatur quos
         incidunt minima ea, eos quis fuga tenetur neque aliquid, nemo cupiditate laudantium?
         Maiores ut provident eligendi?."

        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
