<?php
namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
        "title"=> "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Naufal Pradipta",
        "body"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, vel deleniti vero consequatur, dolorum impedit dolore ipsam, distinctio culpa eum temporibus! Officia a autem enim assumenda, ea doloribus quod ex?"
    ],
    [
        "title"=> "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Radindra Brahma",
        "body"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi aspernatur eius veniam saepe explicabo ab ut quam facere sapiente commodi consectetur sequi voluptatibus debitis reprehenderit nesciunt, animi vitae maxime adipisci libero earum! Labore laborum illo itaque quam magni vitae rerum."
    ]
    
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
     
    }

    
}