@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('profile.update') }}" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="first_name">نام</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="last_name">نام خانوادگی</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="username">نام کاربری</label>
            <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone_number">تلفن</label>
            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $user->phone_number) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">آدرس</label>
            <input type="text" name="address" id="address" value="{{ old('address', $user->address) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="credit_card_number">شماره کارت</label>
            <input type="text" name="credit_card_number" id="credit_card_number" value="{{ old('credit_card_number', $user->credit_card_number) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="active">وضعیت کاربر</label>
            <select name="active" id="active" class="form-control">
                <option value="1" {{ old('active', $user->active) ? 'selected' : '' }}>فعال</option>
                <option value="0" {{ old('active', $user->active) ? '' : 'selected' }}>غیرفعال</option>
            </select>
        </div>

         <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش</a>
    </form>


@endsection