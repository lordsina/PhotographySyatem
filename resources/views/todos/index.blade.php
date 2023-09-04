@extends('layouts.app') <!-- Assuming you have a layout file in resources/views/layouts -->

@section('content')


<div class="container">
        <h1>لیست انجام کار</h1>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo->title }}-{{ $todo->id }}</li>
            @endforeach
        </ul>
    </div>

    <div class="container">
        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <label for="title">New Todo:</label>
            <input type="text" name="title" id="title" required>
            <button type="submit">Add</button>
        </form>
        <ul>
            @foreach ($todos as $todo)
                <li>
                    {{ $todo->title }}
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection