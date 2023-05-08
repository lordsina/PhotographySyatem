@extends('layouts.app')
@section('content')

<form method="POST" action="{{ route('registercheck') }}">
    @csrf
    <div class="mb-3 text-center ">
      <div class="form-text fs-1 text-danger">ثبت نام</div>
    </div>
    
        <div class="form-floating mb-3 ">
            <!-- is-invalid -->
            <input type="text" name="firstname" class="form-control @if ($errors->has('firstname')) is-invalid @endif" id="floatingInput" placeholder="سینا">
            <label for="floatingInput">نام</label>
          </div>
          <div class="form-floating mb-3">
            <!-- is-invalid -->
            <input type="text" name="lastname" class="form-control @if ($errors->has('lastname')) is-invalid @endif" id="floatingInput" placeholder="رشیدی">
            <label for="floatingInput">نام خانوادگی</label>
          </div>
    
    <div class="form-floating mb-3">
      <!-- is-invalid -->
      <input type="text" name="phone" class="form-control @if ($errors->has('phone')) is-invalid @endif" id="floatingInput" placeholder="+98912000000">
      <label for="floatingInput">شماره تلفن</label>
    </div>
    @if ($errors->has('phone')) <p class="text-danger text-start">{{ $errors->first('phone'); }}</p> @endif
    
    <div class="form-floating mb-3">
        <!-- is-invalid -->
        <input type="email" name="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="floatingInput" placeholder="sina@gmail.com">
        <label for="floatingInput">ایمیل</label>
    </div>

    @if ($errors->has('email')) <p class="text-danger text-start">{{ $errors->first('email'); }}</p> @endif

    <div class="form-floating mb-3">
      <input type="password" name="password" class="form-control @if ($errors->has('phone')) is-invalid @endif" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">رمز عبور</label>
    </div>

    @if ($errors->has('password')) <p class="text-danger text-start">{{ $errors->first('password'); }}</p> @endif

    <div class="form-floating ">
        <input type="password" name="re-password" class="form-control @if ($errors->has('re-password')) is-invalid @endif" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">تکرار رمز عبور</label>
    </div>

    @if ($errors->has('re-password')) <p class="text-danger text-start">{{ $errors->first('re-password'); }}</p> @endif

    <div class="mb-3">
      <div class="custom-control custom-checkbox text-start m-3">
        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
        <label class="custom-control-label" for="customCheck">قوانین سایت را مطالعه نمودم و تايید میکنم.</label>
      </div>
    </div>
    <button type="submit" class="btn btn-outline-primary">ثبت نام</button>
    <div class="text-end"><a href="{{ route('login') }}">ورود</a></div>
  </form>

@endsection