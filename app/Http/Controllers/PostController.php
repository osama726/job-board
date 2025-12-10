<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $data = Post::all();
        return view("post.index", ['posts' => $data], ["pagetitle" => 'Posts page' ]);
    }

    function create(){
        $post = Post::create([
            'title' => 'forth Post',
            'content' => 'This is the forth post in my blog.',
            'published' => true,
        ]);

        return redirect('/post');
    }

    function show(Post $post){
        return view('post.show', ['post' => $post, "pagetitle" => 'Single Post' ] );
    }
}
