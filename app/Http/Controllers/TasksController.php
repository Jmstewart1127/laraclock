<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }

    public function stuff($id)
    {
        dd($id);

        $tasks = DB::table('tasks')->get();

        return view('welcome', compact('tasks'));
    }
}
