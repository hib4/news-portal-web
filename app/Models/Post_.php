<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hibatullah Fawwaz Hana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi esse optio, tempora vel iure quo! Accusantium asperiores nisi distinctio commodi voluptatibus tempora perspiciatis ab maiores aliquam nostrum quas perferendis voluptas beatae similique quia provident architecto consequatur tempore officiis minima exercitationem, quidem sint dolorum natus. Dolorem officiis ad ratione odit ut!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mark Zuckerberg",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo doloremque ipsum facere! Accusantium, reprehenderit sequi porro dolorum eius alias repellendus nam veritatis? Est odit laudantium itaque fuga quis aliquam deserunt voluptas, officiis qui, voluptatibus optio mollitia. Nisi minus expedita, culpa odio aperiam dolores distinctio saepe rem dignissimos maxime iusto amet soluta laboriosam libero totam autem. Fuga perspiciatis esse deserunt, asperiores architecto, maxime totam doloremque id illo vitae quam tempore."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $blog_post = static::all();
        return $blog_post->firstWhere('slug', $slug);
    }
}
