<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class MyController extends Controller
{
    public function index() {

        $posts = Post::all();
        return view('welcome', compact("posts"));
    }



    public function createPost(Request $request)
    {

        // dd($id);
        $data = $request -> validate ([
            "title" => 'required|string'
        ]);

        $post = Post::make($data);
        $post -> save();

        return redirect() -> route('posts');  
    }


    public function createComment(Request $request, $id)
    {

        $data = $request -> validate ([
            "body" => 'required|string'
        ]);

        $comment = Comment::make($data);
        $comment -> post_id = $id;

        $comment -> save();

        
        return redirect() -> route('posts');  
    }

    public function deletePost($id){
        $post= Post::findOrFail($id);
        $post->comments()->delete();
        $post->delete();

        return redirect() -> route('posts');

    }

    public function deleteComment($id){
        $comment= Comment::findOrFail($id);
    
        $comment->delete();

        return redirect() -> route('posts');

    }
}
