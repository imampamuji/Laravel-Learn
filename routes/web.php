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
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Imam Pamuji",
        "email" => "imam275pamuji@gmail.com",
        "image" => "imampamuji.png"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "Judul" => "Blog Pertama",
            "slug" => "blog-1",
            "Author" => "Imam Pamuji",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dolorum cupiditate, aut iure nesciunt consectetur sunt, repudiandae suscipit laudantium ea sequi eius eum cum sint incidunt aspernatur doloribus iusto saepe laborum officiis dicta porro doloremque numquam? Repellat assumenda quam nulla, voluptatibus nemo optio debitis ratione."
    
        ],
        [
            "Judul" => "Blog Kedua",
            "slug" => "blog-2",
            "Author" => "Luio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at, eveniet voluptates cumque ipsam quisquam ullam eius aliquid sed id exercitationem voluptatibus error consequatur eos, labore reiciendis molestiae asperiores. Ullam, facilis praesentium aliquid ipsam perspiciatis veritatis molestiae tempora harum veniam. Hic facere commodi quod vel porro unde, fugiat consequuntur libero harum at quis, provident illo facilis ex nostrum! Cumque modi in magnam iure quam rem reprehenderit aut illo facere, nulla earum libero laudantium, doloremque reiciendis nisi quod vitae voluptatem nostrum. Perferendis, officiis quos nihil a eos consequuntur tenetur voluptate adipisci nam dignissimos ab ea sunt quibusdam quaerat, debitis magni officia?"
    
        ]
    ];

    return view('posts', [
        "title" => "blog",
        "posts" => $blog_posts
    ]);
});


// halaman single post

Route::get("/posts/{slug}", function($slug){



    $blog_posts = [
        [
            "Judul" => "Blog Pertama",
            "slug" => "blog-1",
            "Author" => "Imam Pamuji",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dolorum cupiditate, aut iure nesciunt consectetur sunt, repudiandae suscipit laudantium ea sequi eius eum cum sint incidunt aspernatur doloribus iusto saepe laborum officiis dicta porro doloremque numquam? Repellat assumenda quam nulla, voluptatibus nemo optio debitis ratione."
    
        ],
        [
            "Judul" => "Blog Kedua",
            "slug" => "blog-2",
            "Author" => "Luio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at, eveniet voluptates cumque ipsam quisquam ullam eius aliquid sed id exercitationem voluptatibus error consequatur eos, labore reiciendis molestiae asperiores. Ullam, facilis praesentium aliquid ipsam perspiciatis veritatis molestiae tempora harum veniam. Hic facere commodi quod vel porro unde, fugiat consequuntur libero harum at quis, provident illo facilis ex nostrum! Cumque modi in magnam iure quam rem reprehenderit aut illo facere, nulla earum libero laudantium, doloremque reiciendis nisi quod vitae voluptatem nostrum. Perferendis, officiis quos nihil a eos consequuntur tenetur voluptate adipisci nam dignissimos ab ea sunt quibusdam quaerat, debitis magni officia?"
    
        ]
    ];

    $new_post =[];

    foreach ($blog_posts as $post) {
        if($post["slug"]  === $slug){
            $new_post = $post;
        }
    }

    return view("post", [
        "title" => "Single Post",
        "post" =>$new_post
    ]);
});