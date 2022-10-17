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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Marwan",
        "email" => "imaroneu@gmail.com",
        "image" => "me.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marwan Hakim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta, quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit eos corrupti nemo suscipit omnis ab modi veritatis dolor iure est dolore, accusamus voluptate assumenda aspernatur? Alias, exercitationem possimus? Fugiat autem ratione, sunt deserunt similique dolorum saepe deleniti mollitia natus unde labore veritatis non dicta cupiditate illo, maiores dolorem? Molestias quod dolor consectetur. Inventore exercitationem eos impedit perferendis ipsa est obcaecati odit. Minus aspernatur quos incidunt minima ea, eos quis fuga tenetur neque aliquid, nemo cupiditate laudantium? Maiores ut provident eligendi?."
        ],

        [


            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Amos",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta, quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit eos corrupti nemo suscipit omnis ab modi veritatis dolor iure est dolore, accusamus voluptate assumenda aspernatur? Alias, exercitationem possimus? Fugiat autem ratione, sunt deserunt similique dolorum saepe deleniti mollitia natus unde labore veritatis non dicta cupiditate illo, maiores dolorem? Molestias quod dolor consectetur. Inventore exercitationem eos impedit perferendis ipsa est obcaecati odit. Minus aspernatur quos incidunt minima ea, eos quis fuga tenetur neque aliquid, nemo cupiditate laudantium? Maiores ut provident eligendi?."

        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman sigle posts

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Marwan Hakim",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta, quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit eos corrupti nemo suscipit omnis ab modi veritatis dolor iure est dolore, accusamus voluptate assumenda aspernatur? Alias, exercitationem possimus? Fugiat autem ratione, sunt deserunt similique dolorum saepe deleniti mollitia natus unde labore veritatis non dicta cupiditate illo, maiores dolorem? Molestias quod dolor consectetur. Inventore exercitationem eos impedit perferendis ipsa est obcaecati odit. Minus aspernatur quos incidunt minima ea, eos quis fuga tenetur neque aliquid, nemo cupiditate laudantium? Maiores ut provident eligendi?."
        ],

        [


            "title" => "Judul Post Kedua",
            "slug" => "judul=post-kedua",
            "author" => "Amos",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dicta, quae cupiditate ad itaque quod voluptatibus quidem aliquid fugit eos corrupti nemo suscipit omnis ab modi veritatis dolor iure est dolore, accusamus voluptate assumenda aspernatur? Alias, exercitationem possimus? Fugiat autem ratione, sunt deserunt similique dolorum saepe deleniti mollitia natus unde labore veritatis non dicta cupiditate illo, maiores dolorem? Molestias quod dolor consectetur. Inventore exercitationem eos impedit perferendis ipsa est obcaecati odit. Minus aspernatur quos incidunt minima ea, eos quis fuga tenetur neque aliquid, nemo cupiditate laudantium? Maiores ut provident eligendi?."

        ]
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
