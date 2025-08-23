<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::orderBy("created_at", "desc")->paginate(10);
        $posts = Post::all();
        return view("post/index", ['posts' => $posts, 'pageTitle' => "Blog"]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("post/show", ["post" => $post, 'pageTitle' => $post->title]);
    }

    public function create()
    {
        Post::create([
            "title" => "Find Unique Post",
            "body" => "This to test Find Function",
            "published" => true
        ]);

        return redirect('/blog');
    }
}
