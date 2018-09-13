@extends ('layouts.master')

@section ('content')
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
