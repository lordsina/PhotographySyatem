@extends('layouts.app')

@section('content')
    <h1>ویرایش دسترسی</h1>

    <form action="{{ route('permissions.update', $permission->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">نام دسترسی</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}" required>
        </div>
        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>

        <a href="{{ route('permissions.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection