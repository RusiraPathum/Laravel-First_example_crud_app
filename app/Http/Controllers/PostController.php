<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost(){

        return view('add-post');

    }

    public function createPost(Request $request){

        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return back()->with('post_created', 'Post has been Created Successfully');

    }

    public function getPost(){

        $posts = Post::orderBy('id', 'DESC')->get();

        return view('posts',compact('posts'));

    }

    public function getPostById($id){

        $post = Post::where('id', $id)->first();

        return view('single-post',compact('post'));

    }
}
