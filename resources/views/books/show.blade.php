@extends('layouts.app')
@section('content')
<h1>{{ $book->name }}</h1>
<h3>{{ $book->title  }}</h3>
<h3>{{ $book->user_id  }}</h3>
<hr/>
نظرات
<hr/>
<ul>
@foreach ( $book->bookcomments as $comment )
    <li>{{ $comment->fullname .' --- '.$comment->user->firstname  }}</li>
@endforeach
</ul>
<hr/>
<h5>افزودن نظر</h5>
<form method="POST" action="/books/{{ $book->id }}">
    @csrf 
    <div class="form-group">
        <input name="fullname" type="text" class="form-control" id="fullname" aria-describedby="namehelp" value="{{ old('fullname') }}" placeholder="نام و نشان">
    </div>
    <div class="form-group mt-2">
        <label for="description">نظر</label>
        <textarea class="form-control mt-2" id="description" name="description" rows="3">{{ old('description') }}</textarea>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">افزودن نظر</button>
    </div>
</form>




@endsection