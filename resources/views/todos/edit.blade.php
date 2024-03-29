@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('todos.update', $todo->id) }}" method="post" class="myform" name="myform" id="myform">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">عنوان</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ $todo->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">توضیحات</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ $todo->description }}" required>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="completed" name="completed" @if ($todo->completed )
                checked 
                @endif>
                <label class="form-check-label" for="completed">تکمیل شده</label>
            </div>
                
            <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
            <br>
        </form>
    </div>
@endsection