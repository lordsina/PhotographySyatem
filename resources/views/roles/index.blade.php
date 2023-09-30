@extends('layouts.app')

@section('content')
        <h1>سمت</h1>

         <a href="{{ route('roles.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد سمت </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ایدی</th>
                    <th>نام</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('permissions.show', $role->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                            <a href="{{ route('permissions.edit', $role->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                            <form action="{{ route('permissions.destroy', $role->id) }}" method="POST" style="display: inline;" class="myform{{ $role->id }}" name="myform{{ $role->id }}" id="myform{{ $role->id }}" >
                                @method('DELETE')
                                @csrf
                                <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $role->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No roles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
@endsection