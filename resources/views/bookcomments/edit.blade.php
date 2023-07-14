@extends('layouts.app')
@section('content')
<h5>ویرایش نظر</h5>
<form method="POST" action="/books/bookcomments/{{ $bookcomment->id }}">
    @csrf 
    <div class="form-group">
        <input name="fullname" type="text" class="form-control" id="fullname" aria-describedby="namehelp" value="{{ $bookcomment->fullname }}" placeholder="نام و نشان"  >
    </div>
    <div class="form-group mt-2">
        <label for="description">نظر</label>
        <textarea class="form-control mt-2" id="description" name="description" rows="3">{{ $bookcomment->description }}</textarea>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary mb-2">ویرایش نظر</button>
    </div>
</form>
@endsection