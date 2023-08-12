@extends('layouts.app')
@section('content')

            @if (\Session::has('message'))
              <div class="alert alert-info">
                {{\Session::get('message')}}
              </div>
            @endif
          <form method="POST" action="{{ route('logincheck') }}">
            @csrf
            <div class="mb-3 text-center ">
              <div class="form-text fs-1 text-danger">ورود</div>
            </div>
            <div class="form-floating mb-3">
              <!-- is-invalid -->
              <input type="text" name="phone_number" class="form-control @if ($errors->has('phone_number')) is-invalid @endif" id="floatingInput" placeholder="+98912000000">
              <label for="floatingInput">شماره تلفن</label>
            </div>
            @if ($errors->has('phone_number')) <p class="text-danger text-start">{{ $errors->first('phone_number'); }}</p> @endif
            <div class="form-floating">
              <input type="password" name="password" class="form-control @if ($errors->has('phone')) is-invalid @endif" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">رمز عبور</label>
            </div>
            @if ($errors->has('password')) <p class="text-danger text-start">{{ $errors->first('password'); }}</p> @endif
            <div class="mb-3">
              <div class="custom-control custom-checkbox text-start m-3">
                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                <label class="custom-control-label" for="customCheck">مرا به خاطر بسپار!</label>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">ورود</button>
            <div class="text-end"><a href="{{ route('register-user') }}">ثبت نام</a></div>
          </form>
        
@endsection