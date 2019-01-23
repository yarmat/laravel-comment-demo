<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('post.index')->with(compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.show')->with(compact('post'));
    }
}
