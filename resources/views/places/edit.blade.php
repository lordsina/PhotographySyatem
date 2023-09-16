@extends('layouts.app')

@section('content')
    <h1>ویرایش تالار</h1>

    <form action="{{ route('places.update', $place->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">نام تالار</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $place->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">توضیحات</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $place->description }}</textarea>
        </div>
        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>

        <a href="{{ route('places.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection