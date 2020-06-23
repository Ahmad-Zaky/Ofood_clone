<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = new Post();
        return view('welcome', [
            'posts' => $posts->home(),
            'mostViewed' => $posts->mostViewed(),
            'categories' => $posts->categories()
        ]);
    }
}
