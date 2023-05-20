@extends('layouts.app')
@section('content')
<h1>کتاب ها</h1>
<hr>
@foreach ($books as $book )
    <div>
    <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
    </div>
@endforeach

@endsection