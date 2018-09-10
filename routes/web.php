<?php

/* Route::get('/tasks', function () { */
/*     $tasks = Task::all(); */

/*     return view('tasks.index', compact('tasks')); */
/* }); */

/*
 * specify the controller@method
 */
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');

/* New Resources */

// Eloquent model => Post (posts table)
// controller => PostsController
// migration => create_posts_table

// php artisan make:model Post
// php artisan make:controller PostsController
// php artisan make:migration create_posts_table --create=posts

/* OR */

// php artisan make:model Post -mc

// artisan, make me a model called Post, and I would like a migration and a controller, please.
// now go to database/migrations and set up the table.
