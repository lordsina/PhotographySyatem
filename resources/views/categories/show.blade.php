@extends('layouts.app')

@section('content')
    <h1>مشاهده جزییات</h1>

    <h2>{{ $category->name }}</h2>

    <a href="{{ route('categories.index') }}" class="btn btn-primary">بازگشت</a>
@endsection