@extends ('layouts.master')
@section ('content')
<div class="h-100 p-2 container">
    <h1 class="mb-2 text-center">
        {{ $post->title }}
    </h1>
    <p class="p-2">
    {{ $post->body }}
    </p>

    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
                {{ $comment->body }}
            </li>
            @endforeach
        </ul>
    </div>

    <hr>

    <div class="card">
        <div class="card-block">
            <form action="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea id="" class="form-control" name="body" placeholder="Your comment here."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add comment</button>
                </div>
            </form>

            @include ('layouts.errors')

        </div>
    </div>

</div>
@endsection
