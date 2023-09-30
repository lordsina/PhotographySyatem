@extends('layouts.app')

@section('content')
    <h1>ایجاد دسترسی</h1>

    <form action="{{ route('permissions.store') }}" method="post" class="myform" name="myform" id="myform">
        @csrf

        <div class="form-group">
            <label for="name">نام دسترسی</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تالار </a>
        <br>
        <a href="{{ route('permissions.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection