<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $postss = Post::all();

        return view('post.index')->with(['postss' => $postss]);

    }

    public function store(Request $request) {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();

    }
}
