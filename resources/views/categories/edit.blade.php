
@extends('layouts.app')

@section('content')
    <h1>ویرایش دسته بندی</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">نام دسته بندی</label>
            <input type="text" name="name" id="name" class="form-control mt-2" value="{{ $category->name }}">
        </div>

        <!-- Other fields you want to edit -->

        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>

    <a href="{{ route('categories.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection