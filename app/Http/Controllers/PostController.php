<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(12);
        return view('posts' , compact('posts'));
    }

    public function single(Post $post)
    {
        return view('single-post' , compact('post'));

    }
}
