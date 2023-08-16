@extends('layouts.app')

@section('content')
    <h1>Post Details</h1>

    <div>
        <h2>Title: {{ $post->title }}</h2>
        <p>Content: {{ $post->content }}</p>
        <p>Category: {{ $post->category->name }}</p>
        <!-- Other post details you want to display -->
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-primary">بازگشت</a>
@endsection