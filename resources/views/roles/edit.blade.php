@extends('layouts.app')

@section('content')
    <h1>ویرایش سمت</h1>

    <form action="{{ route('roles.update', $role->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">نام سمت</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}" required>

            <h3>دسترسی</h3>
            <select class="js-example-basic-multiple" name="permissions[]" multiple="multiple"  style="width: 100%;">
               @foreach($permissions as $permission)
                        <option value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? 'selected' : '' }}>
                            {{ $permission->name }}
                        </option>
                @endforeach
            </select>
        </div>
        <a href="javascript:{}" onclick="javascript:confirmSubmit()" class="mt-4 btn mb-2 edit-btn"><i class="fa-solid fa-rotate" style="color: #fecb3e;"></i> ویرایش سمت</a>
    </form>

        <a href="{{ route('roles.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection