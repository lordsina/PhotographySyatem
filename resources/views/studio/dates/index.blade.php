@extends('layouts.app')
@section('content')



<div class="row">
<button type="button" class="btn btn-outline-primary mb-5">ایجاد</button>
@foreach ($halls as $hall )
  <div class="col-sm-6 mb-5" style="height: 150px;">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$hall->name}}</h5>
        <p class="card-text">{{$hall->description}}</p>
        <button type="button" class="btn btn-outline-primary">مشاهده</button>
        <button type="button" class="btn btn-outline-warning">ویرایش</button>
        <button type="button" class="btn btn-outline-danger">حذف</button>
      </div>
    </div>
  </div>
@endforeach
</div>

@endsection