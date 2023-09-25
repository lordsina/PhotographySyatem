@extends('layouts.app')
@section('content')
    <h1>مشاهده کاربر</h1>

    <div class="card">
        <div class="card-header">
            <h2>نام</h2>
            {{ $user->first_name }}
            <h2>نام خانوادگی</h2>
            {{ $user->last_name }}
            <h2>نام کاربری</h2>
            {{ $user->username }}
        </div>


        <div class="card-body">
            <label for="id_label_multiple">
            سطح دسترسی کاربر
            <select class="js-example-basic-multiple" name="states[]" multiple="multiple" id="id_label_multiple" style="width: 100%;">
            @foreach ($user->getRoleNames() as $role )
            <option value="{{ $role }}" selected>{{ $role }}</option>
            @endforeach
            </select>
            </label>
            {{-- {{ $permissions= $user->getAllPermissions() }} --}}
            <h3>مجوز</h3>
            <select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width: 100%;">
            @foreach($user->getAllPermissions() as $permission)
            <option value="{{ $permission->name }}" selected>{{ $permission->name }}</option>
            @endforeach 


            </select>

        </div>

        <div class="card-footer text-muted">
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>


@endsection