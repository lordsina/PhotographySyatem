@extends('layouts.app')

@section('content')
    <h1>مشاهده پست</h1>

    <div class="card">
        <div class="card-header">
            <h2>ایدی</h2>
            {{ $place->id }}
        </div>


        <div class="card-body">
            <h2>نام تالار</h2>
            {{ $place->name }}
        </div>

        <div class="card-footer text-muted">
            <h2>توضیحات</h2>
            {{ $place->description }}
        </div>
    </div>

    <a href="{{ route('places.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>

    <h1>نظرات</h1>

@endsection