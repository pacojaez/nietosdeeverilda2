<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function showpost($id){

        $post = Post::find($id);
        $comments = Comment::where('image.id', 'like', $id);
        // dd($comments);
        return view('post', [
            'post' => $post,
            'comments' => $comments,
        ]);
    }
}
