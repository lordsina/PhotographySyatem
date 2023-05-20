@extends('layouts.app')
@section('content')
<h1>{{ $book->title }}</h1>
<hr>
Comments
<hr>
<ul>
@foreach ( $book->bookcomments as $comment )
    <li>{{ $comment->fullname  }}</li>
@endforeach
</ul>

@endsection