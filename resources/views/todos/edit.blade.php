@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Todo</h1>
        <form action="{{ route('todos.update', $todo->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="title">Todo:</label>
            <input type="text" name="title" id="title" value="{{ $todo->title }}" required>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection