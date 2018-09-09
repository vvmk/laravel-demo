<!DOCTYPE html>
<html>
    <head>
        <title>Blog - couchjes.us</title>
    </head>
    <body>
        <h1>Tasks</h1>
        <ul>
            @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            </li>
            @endforeach
        </ul>
    </body>
</html>
