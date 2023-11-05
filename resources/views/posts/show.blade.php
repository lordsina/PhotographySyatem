@extends('layouts.app')

@section('content')
    <h1>مشاهده پست</h1>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $post->title }}</h1>
                <hr>
                <p class="card-text">{{ $post->content }}</p>

                <hr>

                <div class="card-text text-muted">
                    <span class="badge rounded-pill text-bg-primary">دسته بندی: {{ $post->category->name }}</span>
                    <span class="badge rounded-pill text-bg-success">نویسنده: {{ $post->user->first_name.' '.$post->user->last_name}}</span>
                </div>

                <div class="d-flex justify-content-between mt-3">

                    @if($post->nextPost)
                        <a href="{{ route('posts.show', $post->nextPost->id) }}" class="btn btn-outline-primary">پست بعدی</a>
                    @endif

                    @if($post->previousPost)
                        <a href="{{ route('posts.show', $post->previousPost->id) }}" class="btn btn-outline-primary">پست قبلی</a>
                    @endif

                </div>
            </div>
        </div>
    </div>



    <a href="{{ route('posts.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>

    <h1>نظرات</h1>

@endsection