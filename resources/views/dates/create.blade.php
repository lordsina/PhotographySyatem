@extends('layouts.app')

@section('content')
    <h1>ایجاد تاریخ</h1>

    <form action="{{ route('dates.store') }}" method="post" class="myform" name="myform" id="myform">
        @csrf

        <div class="form-group">
            <label for="date">تاریخ:</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>

        
        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تاریخ </a>
        <br>
        <a href="{{ route('dates.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection