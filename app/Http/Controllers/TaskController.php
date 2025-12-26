<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Employee;
class TaskController extends Controller
{
    public function index()
    {
       $tasks = Task::all();
        
       return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('tasks.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'assigned_to' => 'required',
            'due_date' => 'required|date',
            'status' => 'required|string',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }
}


