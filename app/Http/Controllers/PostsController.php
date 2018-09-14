<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct() {
        // must be signed in to create a post
        // all routes are behind auth except index and show. go figure...
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        // Temporary
        $archives = Post::selectRaw("EXTRACT(YEAR FROM created_at) as year, to_char(created_at, 'Month')  as month, count(*) published")
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();

        return view('posts.index', compact('posts', 'archives'));
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
            new Post(request(['title', 'body']))
        );

        return redirect()->home();
    }
}
