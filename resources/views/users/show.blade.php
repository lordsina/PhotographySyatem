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
            @foreach ($user->getRoleNames() as $role )
                {{ $role }}
                <br>
            @endforeach
            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
            </select>

            <br>
            ------------------------
            {{-- {{ $permissions= $user->getAllPermissions() }} --}}
            <br>

            @foreach($user->getAllPermissions() as $permission)
		        {{ $permission->name }}
                <br>
            @endforeach 
        </div>

        <div class="card-footer text-muted">
        </div>
    </div>

    <a href="{{ route('users.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>


@endsection