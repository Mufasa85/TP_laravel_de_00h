<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function articles()
    {
        return view('posts.articles');
    }

    public function article($slug)
    {
        return view('posts.article', ['slug' => $slug]);
    }

    public function categories()
    {
        return view('posts.categories');
    }

    public function about()
    {
        return view('posts.about');
    }
}

