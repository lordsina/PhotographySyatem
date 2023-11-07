<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct() {
       // $this->middleware('auth',['except'=>'index']);
       $this->middleware('auth');
    }
    
public function index()
{
    $user = auth()->user();
    $todos_completed = $user->todos()->where('completed',true)->latest()->get();
    $todos_not_completed = $user->todos()->where('completed',false)->latest()->get();
    return view('todos.index', compact('todos_completed','todos_not_completed'));
}

public function store(Request $request)
{
    
    $user = auth()->user();
    $user->todos()->create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ]);
    return redirect()->route('todos.index');
}

public function edit(Todo $todo)
{
    return view('todos.edit', compact('todo'));
}

public function update(Request $request, Todo $todo)
{
    
    $data_ck= $request->input('completed') =='on' ? true : false; 
    $todo->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'completed' => $data_ck,
    ]);

    return redirect()->route('todos.index');
}

public function show($id)
{
    $todos = Todo::findOrFail($id);
    return view('todos.show', compact('todos'));
}

public function destroy(Todo $todo)
{
    $todo->delete();
    return redirect()->route('todos.index');
}
}
