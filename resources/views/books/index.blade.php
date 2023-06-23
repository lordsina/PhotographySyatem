@extends('layouts.app')
@section('content')
<h1>کتاب ها</h1>
<hr>
<div class="row">
@foreach ($books as $book )


<div class="col-sm-6">
    <div class="card mt-2">
      <div class="card-body">
        <h5 class="card-title"><a href="/books/{{ $book->id }}">{{ $book->name }}</a></h5>
        <p class="card-text">{{ $book->title }}</p>
        <a href="/books/{{ $book->id }}" class="btn btn-primary mt-2">مشاهده</a>
        <a href="/books/{{ $book->id }}/edit" class="btn btn-secondary mt-2">بروزرسانی</a>
        <a href="/books/{{ $book->id }}" class="btn btn-danger mt-2">حذف</a>

      </div>
    </div>
</div>
@endforeach
</div>

<hr>
<h3 class="mt-3">کتاب جدید</h3>
<form method="POST" action="/books">
    @csrf 
    <div class="form-group">
        <input name="name" type="text" class="form-control" id="name" aria-describedby="namehelp" placeholder="نام کتاب">
    </div>
    <div class="form-group mt-2">
        <select name="tags" id="tags" multiple="multiple">
            @foreach ($tags as $tag )
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mt-2">
        <label for="title">موضوع کتاب</label>
        <textarea class="form-control mt-2" id="title" name="title" rows="3"></textarea>
    </div>

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">افزودن کتاب </button>
    </div>
</form>

@endsection