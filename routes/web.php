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
