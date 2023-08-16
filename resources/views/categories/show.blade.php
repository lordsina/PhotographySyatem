@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>

    <h2>{{ $category->name }}</h2>

    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
@endsection