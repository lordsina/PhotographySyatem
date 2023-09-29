@extends('layouts.app')

@section('content')
    <h1>ویرایش پست</h1>

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

        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>

    <form method="POST" action="{{ route('upload',$post->id) }}" class="dropzone mb-5 mt-5" id="my-great-dropzone" name="file" >
        @csrf
    </form>


    <div class="container">
        <div class="row">
            @foreach ($post->uploads as $upload )
            <div class="col-6">
                <img class="img-thumbnail" src="{{ $upload->image_path }}" alt="{{ $upload->image_path }}">
            </div>
            @endforeach            
        </div>
    </div>


    

        <a href="{{ route('posts.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection