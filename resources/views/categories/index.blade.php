@extends('layouts.app')

@section('content')
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Create Category</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <!-- View action -->
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">View</a>
                        
                        <!-- Exclude Edit and Delete actions -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection