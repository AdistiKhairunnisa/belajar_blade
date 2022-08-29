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
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
    [
        "title" => "Judul Postku pertama",
        "slug" => "judul-post-pertama",
        "author" => "Adis",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo hic quae fugit omnis illo ex veritatis facilis repellendus eveniet optio quaerat eligendi asperiores ratione natus perspiciatis obcaecati amet autem nam ullam, cum quis. Natus, voluptatem. Accusantium nesciunt molestiae quasi nostrum. Consequuntur labore est distinctio recusandae. Itaque quaerat, repellat vitae earum blanditiis expedita praesentium saepe facilis recusandae mollitia impedit dicta cumque corporis fugiat ex alias beatae aspernatur maxime nam facere nihil reiciendis reprehenderit quo? Quasi quaerat aut debitis esse. Sit, ut!"
    ],
    [
        "title" => "Judul Postku kedua",
        "slug" => "judul-post-kedua",
        "author" => "Thistea",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo hic quae fugit omnis illo ex veritatis facilis repellendus eveniet optio quaerat eligendi asperiores ratione natus perspiciatis obcaecati amet autem nam ullam, cum quis. Natus, voluptatem. Accusantium nesciunt molestiae quasi nostrum. Consequuntur labore est distinctio recusandae. Itaque quaerat, repellat vitae earum blanditiis expedita praesentium saepe facilis recusandae mollitia impedit dicta cumque corporis fugiat ex alias beatae aspernatur maxime nam facere nihil reiciendis reprehenderit quo? Quasi quaerat aut debitis esse. Sit, ut!"
    ],
];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adisti Khairunnisa",
        "email" => "adistikhairunnisa@gmail.com",
        "image" => "adisti.png"
    ]);
});


//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Postku pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adis",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo hic quae fugit omnis illo ex veritatis facilis repellendus eveniet optio quaerat eligendi asperiores ratione natus perspiciatis obcaecati amet autem nam ullam, cum quis. Natus, voluptatem. Accusantium nesciunt molestiae quasi nostrum. Consequuntur labore est distinctio recusandae. Itaque quaerat, repellat vitae earum blanditiis expedita praesentium saepe facilis recusandae mollitia impedit dicta cumque corporis fugiat ex alias beatae aspernatur maxime nam facere nihil reiciendis reprehenderit quo? Quasi quaerat aut debitis esse. Sit, ut!"
        ],
        [
            "title" => "Judul Postku kedua",
            "slug" => "judul-post-kedua",
            "author" => "Thistea",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo hic quae fugit omnis illo ex veritatis facilis repellendus eveniet optio quaerat eligendi asperiores ratione natus perspiciatis obcaecati amet autem nam ullam, cum quis. Natus, voluptatem. Accusantium nesciunt molestiae quasi nostrum. Consequuntur labore est distinctio recusandae. Itaque quaerat, repellat vitae earum blanditiis expedita praesentium saepe facilis recusandae mollitia impedit dicta cumque corporis fugiat ex alias beatae aspernatur maxime nam facere nihil reiciendis reprehenderit quo? Quasi quaerat aut debitis esse. Sit, ut!"
        ],
    ];
    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
return view('post', [
    "title" => "Single Post",
    "post" => $new_post
]);
});
