<?php

namespace App\Models;

class Post {

    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $new_post =[];

        // foreach ($posts as $p) {
        //     if($p["slug"]  === $slug){
        //         $new_post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);

    }

}
