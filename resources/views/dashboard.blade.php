@extends('layouts.app')
@section('content')
<div class="row align-items-start">
    <div class="col">
      <div class="m-2 p-1 rounded bg-info text-light" style="height: 100px;">
        <p>تعداد کل کاربران سایت</p>
        <h5>{{ $users->count() }} نفر</h5>
      </div>
    </div>
    <div class="col" >
      <div class="m-2 p-1 rounded bg-warning text-light" style="height: 100px;">
        <p>
          ثبت نام اخرین کاربر
        </p>
        <h5>
          {{ $users->last()->first_name." ".$users->last()->last_name }}
		</h5>

      </div>
    </div>
    <div class="col">
      <div class="m-2 p-1 rounded bg-danger text-light" style="height: 100px;">
    	<p>
          تعداد کل پست ها
        </p>
        <h5>
          {{ $posts->count()}}
		</h5>
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