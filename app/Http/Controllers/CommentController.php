<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view("comment/index", ['comments' => $comments, 'pageTitle' => "Comments"]);
    }

    public function create()
    {
        Comment::create([
            "author" => "Wael",
            "contect" => "This is a Comment !",
            "post_id" => 2
        ]);

        return redirect('/comments');
    }
}
