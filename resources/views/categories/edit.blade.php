
@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
        </div>

        <!-- Other fields you want to edit -->

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
@endsection