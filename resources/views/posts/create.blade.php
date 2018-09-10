@extends ('layouts.master')

@section ('content')
<hr>
<form>
    {{ csrf_field() }}

    <div class="form-group" method="POST" action="/posts">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Post Title">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Publish</button>
</form>
@endsection
