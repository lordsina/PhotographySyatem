@extends('layouts.app')

@section('content')
    <h1>ایجاد تالار</h1>

    <form action="{{ route('places.store') }}" method="post" class="myform" name="myform" id="myform">
        @csrf

        <div class="form-group">
            <label for="name">نام تالار</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">توضیحات</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تالار </a>
        <br>
        <a href="{{ route('places.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection