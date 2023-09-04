@extends('layouts.app')

@section('content')
    <h1 class="mb-3">ایجاد دسته بندی</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="myform" name="myform" id="myform">
        @csrf

        <div class="form-group">
            <label for="name">نام دسته بندی</label>
            <input type="text" class="form-control mt-2" id="name" name="name" required>
        </div>

        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد دسته بندی</a>
        <br>
        <a href="{{ route('categories.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection