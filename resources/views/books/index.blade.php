@extends('layouts.app')
@section('content')
<h1>کتاب ها</h1>
<hr>
@foreach ($books as $book )
    <div>{{ $book->title }}</div>
@endforeach

@endsection