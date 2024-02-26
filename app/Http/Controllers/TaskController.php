<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::oldest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = Task::create(['name' => $request->input('name')]);

        return view('partials.task', [
            'task' => $task
        ]);
    }

    public function show(Task $task)
    {

        return view('partials.task', [
            'task' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $task->update(['name' => $request->input('name')]);

        return view('partials.task', [
            'task' => $task
        ]);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        redirect()->route('tasks.index');
        //return response()->json(['success' => 'Task deleted successfully']);
    }
}
