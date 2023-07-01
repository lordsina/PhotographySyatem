@extends('layouts.app')
@section('content')
<div class="row align-items-start">
    <div class="col">
      <div class="m-2 p-1 rounded bg-info text-light" style="height: 100px;">
        <p>تعداد کل یوزهای سایت</p>
        <h5>{{ $users->count() }}</h5>
      </div>
    </div>
    <div class="col" >
      <div class="m-2 p-1 rounded bg-warning text-light" style="height: 100px;">
        <p>
          ثبت نام اخرین کاربر
        </p>
        <p>
          {{ $users->last()->firstname." ".$users->last()->lastname }}
        </p>

      </div>
    </div>
    <div class="col">
      <div class="m-2 p-1 rounded bg-danger text-light" style="height: 100px;">

      </div>
    </div>
  </div>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
@endsection