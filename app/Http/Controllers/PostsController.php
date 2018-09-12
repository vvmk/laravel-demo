<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        // must be signed in to create a post
        // all routes are behind auth except index and show. go figure...
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'title' => 'required|min:2|max:140',
            'body' => 'required|min:2',
        ]);

        auth()->user()->publish(
            new Post([$request->title, $request->body])
        );

        return redirect()->home();
    }
}
