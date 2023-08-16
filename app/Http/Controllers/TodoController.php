<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
public function index()
{
    $user = auth()->user();
    $todos = $user->todos()->latest()->get();
    return view('todos.index', compact('todos'));
}

public function store(Request $request)
{
    $user = auth()->user();
    $user->todos()->create([
        'title' => $request->input('title')
    ]);

    return redirect()->route('todos.index');
}

public function edit(Todo $todo)
{
    return view('todos.edit', compact('todo'));
}

public function update(Request $request, Todo $todo)
{
    $todo->update([
        'title' => $request->input('title')
    ]);

    return redirect()->route('todos.index');
}

public function destroy(Todo $todo)
{
    $todo->delete();
    return redirect()->route('todos.index');
}
}