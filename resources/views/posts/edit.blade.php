@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">عنوان</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content">محتوا</label>
            <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">دسته بندی</label>
            <select name="category_id" id="category" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Other fields you want to edit -->

        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>

        <a href="{{ route('posts.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection