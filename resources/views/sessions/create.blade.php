@extends ('layouts.master')
@section ('content')
<div class="col-md-8">
    <h1>Sign in</h1>
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Sign in</button>
        </div>
        @include ('layouts.errors')
    </form>
</div>
@endsection
