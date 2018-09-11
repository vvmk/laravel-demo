@extends ('layouts.master')
@section ('content')
<form method="POST" action="/register">
    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password">
    </div>
    <div class="form-group">
        <label for="confirm">Password</label>
        <input id="confirm" class="form-control" type="password" name="confirm">
    </div>
    <button class="btn btn-success" type="submit">Sign up</button>

</form>
@endsection
