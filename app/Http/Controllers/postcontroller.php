<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class postcontroller extends Controller
{
    public function home()
    {
        return view('home', [
            "title" => "home",
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "about",
            "name" => "sudita",
            "instagram" => "sudithaa",
            "email" => "sudita06@gmail.com",
            "image" => "img/sudita.jpg",
    
        ]);
    }
    public function posts()
    {
        return view('posts', [
            "title" => "posts",
            "posts" => post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "single post",
            "post" => post::find($slug)
        ]);
    }
}
