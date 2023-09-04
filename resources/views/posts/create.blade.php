@extends('layouts.app')

@section('content')
    <h1>ایجاد پست</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="category">دسته بندی</label>
            <select class="form-control" id="category" name="category_id" required>
                <option value="">انتخاب دسته</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="content">محتوا</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection