@extends('layouts.app')

@section('content')
    <h1>مشاهده پست</h1>

    <div class="card">
        <div class="card-header">
            <h2>عنوان</h2>
            {{ $post->title }}
        </div>


        <div class="card-body">
            <h2>محتوا</h2>
            {{ $post->content }}
        </div>

        <div class="card-footer text-muted">
            <h2>دسته بندی </h2>
            {{ $post->category->name }}
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>

    <h1>نظرات</h1>

@endsection