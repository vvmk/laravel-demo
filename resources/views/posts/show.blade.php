@extends ('layouts.master')
@section ('content')
<div class="h-100 p-2 container">
    <h1 class="mb-2 text-center">
        {{ $post->title }}
    </h1>
    <p class="p-2">{{ $post->body }}</p>
</div>
@endsection
