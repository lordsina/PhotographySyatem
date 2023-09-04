@extends('layouts.app')

@section('content')
    <h1>ایجاد پست</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="myform" name="myform" id="myform">
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
        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد پست </a>
        <br>
        <a href="{{ route('posts.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection