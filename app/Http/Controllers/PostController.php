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
        $post = Post::create([ // creat post in database table
            'title' => 'fifth Post',
            'content' => 'This is the fifth post.',
            'published' => true,
        ]); // for test

        return redirect('/posts');
    }

    function show(Post $post){ // كتابة اسم الموديل في البراميتار بيغني عن الخطوات الي تحت دي كلها وبيعملها تلقائي
        // $post = Post::find($post); // ممكن استهدم دي لو مكتبتش اسم الموديل في البراميتار
        // $post = Post::findOrFail( $post ); // نفس الكلام بس هنا بيزيد انه بيقدر يهندل اليرور لو مثلا بعت اي دي مش موجود هيوديني علي صفحة ال 404 بدل ميطلع ايرور
        return view('post.show', ['post' => $post, "pagetitle" => 'Single Post' ] );
    }

    function destroy(Post $post){
        $post->delete();
        // Post::destroy( $post->id );
        // return redirect('/posts');
        return to_route('post.index');
    }
}
