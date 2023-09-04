@extends('layouts.app')

@section('content')
    <h1>مشاهده دسته بندی</h1>

    <h2>{{ $category->name }}</h2>

    <a href="{{ route('categories.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection