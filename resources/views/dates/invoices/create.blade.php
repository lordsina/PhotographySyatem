@extends('layouts.app')

@section('content')
    <h1>ایجاد فاکتور</h1>

    <form action="{{ route('places.store') }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        
        <input type="hidden" name="date_id" value="">

        <div class="form-group">
            <label for="place">تالار</label>
            <select class="form-control" id="place" name="place_id" required>
                <option value="">انتخاب تالار</option>
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </select>
        </div>

        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تالار </a>
        <br>
        <a href="{{ route('places.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>
@endsection