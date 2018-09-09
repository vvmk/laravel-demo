<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    /* public function show($id) { */
    /*     $task = Task::find($id); */

    /*     return view('tasks.show', compact('task')); */
    /* } */

    /*
     * Route Model Binding
     *
     * This replaces the above method. By default laravel looks for 
     * a primary key, but can be configured to use a slug or whatever.
     *
     * It is important that the prop name is $task, like as it was
     * typed in the route: '/tasks/{task}'
     */
    public function show(Task $task) {
        return view('tasks.show', compact('task'));
    }
}
