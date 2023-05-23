@extends('layouts.app')
@section('content')
<h1>{{ $book->title }}</h1>
<hr/>
نظرات
<hr/>
<ul>
@foreach ( $book->bookcomments as $comment )
    <li>{{ $comment->fullname  }}</li>
@endforeach
</ul>
<hr/>
<h5>افزودن نظر</h5>
<form method="POST" action="/books/{{ $book->id }}">
    @csrf 
    <div class="form-group">
        <input name="fullname" type="text" class="form-control" id="fullname" aria-describedby="namehelp" placeholder="نام و نشان">
    </div>
    <div class="form-group mt-2">
        <label for="description">نظر</label>
        <textarea class="form-control mt-2" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">افزودن نظر</button>
    </div>
</form>
@endsection