<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()
            ->tasks()
            ->latest()
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        auth()->user()->tasks()->create([
            'title' => $request->title,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, Task $task)
    {
        $this->authorizeTask($task);

        $task->update([
            'title' => $request->title,
            'is_completed' => $request->boolean('is_completed'),
        ]);

        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        $this->authorizeTask($task);

        $task->delete();

        return redirect()->back();
    }

    private function authorizeTask(Task $task)
    {
        abort_if($task->user_id !== auth()->id(), 403);
    }
}
