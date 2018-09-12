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

</div>
@endsection
