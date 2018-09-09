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

        <hr>

    </div> <!-- /container -->
@endsection
