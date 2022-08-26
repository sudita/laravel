<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post 
{
    private static $blog_posts = [
    [
        "title" => "post pertama",
        "slug"  => "judul-post-pertama",
        "author"=> "sudita",
        "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatem necessitatibus ea iure unde nobis autem consectetur officia dolorum! Est laborum recusandae nobis obcaecati libero! Rerum dicta ipsam debitis dignissimos deserunt impedit aut omnis nulla accusantium. Accusantium sint, temporibus quam exercitationem assumenda laudantium aut sit, et nam distinctio dolorum harum, iure molestiae autem culpa cupiditate rerum facilis perspiciatis quia ducimus. Officia ut ex voluptatum assumenda, asperiores earum aut ea nisi voluptates est beatae. Eum, nisi assumenda doloremque fugiat itaque corporis non. Corporis nostrum vel eum sed iusto, neque eaque deserunt!",
    ],

    [
        "title" => "post kedua",
        "slug"  => "judul-post-kedua",
        "author"=> "ratih",
        "body"  => "Enim voluptatem necessitatibus ea iure unde nobis autem consectetur officia dolorum! Est laborum recusandae nobis obcaecati libero! Rerum dicta ipsam debitis dignissimos deserunt impedit aut omnis nulla accusantium. Accusantium sint, temporibus quam exercitationem assumenda laudantium aut sit, et nam distinctio dolorum harum, iure molestiae autem culpa cupiditate rerum facilis perspiciatis quia ducimus. Officia ut ex voluptatum assumenda, asperiores earum aut ea nisi voluptates est beatae. Eum, nisi assumenda doloremque fugiat itaque corporis non. Corporis nostrum vel eum sed iusto, neque eaque deserunt!",
    ],

    [
        "title" => "post ketiga",
        "slug"  => "judul-post-ketiga",
        "author"=> "agus",
        "body"  => "Est laborum recusandae nobis obcaecati libero! Rerum dicta ipsam debitis dignissimos deserunt impedit aut omnis nulla accusantium. Accusantium sint, temporibus quam exercitationem assumenda laudantium aut sit, et nam distinctio dolorum harum, iure molestiae autem culpa cupiditate rerum facilis perspiciatis quia ducimus. Officia ut ex voluptatum assumenda, asperiores earum aut ea nisi voluptates est beatae. Eum, nisi assumenda doloremque fugiat itaque corporis non. Corporis nostrum vel eum sed iusto, neque eaque deserunt!",
    ],

    [
        "title" => "post keempat",
        "slug"  => "judul-post-keempat",
        "author"=> "made",
        "body"  => "voluptatem necessitatibus ea iure unde nobis autem consectetur officia dolorum! Est laborum recusandae nobis obcaecati libero! Rerum dicta ipsam debitis dignissimos deserunt impedit aut omnis nulla accusantium. Accusantium sint, temporibus quam exercitationem assumenda laudantium aut sit, et nam distinctio dolorum harum, iure molestiae autem culpa cupiditate rerum facilis perspiciatis quia ducimus. Officia ut ex voluptatum assumenda, asperiores earum aut ea nisi voluptates est beatae. Eum, nisi assumenda doloremque fugiat itaque corporis non. Corporis nostrum vel eum sed iusto, neque eaque deserunt!",
    ],
];

public static function all()
{
    return collect(self::$blog_posts);
}

public static function find($slug)
    {
        $posts = static::all();
        // $post  = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //         $post =$p;
        //     }
        // }

        return $posts->firstwhere('slug', $slug);
    }



}