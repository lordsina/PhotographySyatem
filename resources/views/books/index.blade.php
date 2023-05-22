@extends('layouts.app')
@section('content')
<h1>کتاب ها</h1>
<hr>
@foreach ($books as $book )
    <div>
    <a href="/books/{{ $book->id }}">{{ $book->title }}</a>
    </div>
@endforeach
<hr>
<h3 class="mt-3">کتاب جدید</h3>
<form method="POST" action="/books">
    @csrf 
    <div class="form-group">
        <input name="name" type="text" class="form-control" id="name" aria-describedby="namehelp" placeholder="نام کتاب">
    </div>
    <div class="form-group mt-2">
        <label for="title">موضوع کتاب</label>
        <textarea class="form-control mt-2" id="title" name="title" rows="3"></textarea>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">افزودن کتاب</button>
    </div>
</form>

@endsection