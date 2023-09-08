@extends('layouts.app') <!-- Assuming you have a layout file in resources/views/layouts -->

@section('content')


<div class="container">
        <h1>لیست انجام کار</h1>
        <hr>
        <h1>عنوان</h1>
        <h3>{{ $todos->title }}</h3>
        <h1>محتوا</h1>
        <h3>{{ $todos->description }}</h3>
        <h1>تکمیل</h1>
        <h3>{{ $todos->completed }}</h3>
        <a href="{{ route('todos.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </div>
@endsection