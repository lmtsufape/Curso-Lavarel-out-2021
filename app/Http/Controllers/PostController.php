<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // public function getById($id) { }

    public function getById(Request $request) {
        return Post::find($request->id);
    }

    public function getAll(Request $request) {
        return Post::all();
    }

    public function new_post() {
        return view('posts.create');
    }

    public function create(Request $request) {
        $novo_post = new Post();
        $novo_post->title = $request->title;
        $novo_post->text = $request->text;
        $novo_post->user_id = $request->user_id;
        
        dd($novo_post->save());
        
    }
}
