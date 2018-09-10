@extends ('layouts.master')

@section ('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Tales from the Couch</h1>
            <p>Hi, I'm couch vince!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <p><a class="btn btn-secondary" href="/posts/{{ $post->id }}" role="button">Read on... &raquo;</a></p>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-8">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </div>
            <div class="col-2">
                @include ('layouts.sidebar')
            </div>
        </div>

        <hr>

    </div> <!-- /container -->
@endsection
