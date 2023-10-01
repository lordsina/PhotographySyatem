@extends('layouts.app')

@section('content')
        <h1>دسترسی ها</h1>

        <a href="{{ route('permissions.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد دسترسی </a>

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
                @forelse($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ route('permissions.show', $permission->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                            <a href="{{ route('permissions.edit', $permission->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display: inline;" class="myform{{ $permission->id }}" name="myform{{ $permission->id }}" id="myform{{ $permission->id }}" >
                                    @method('DELETE')
                                    @csrf
                                <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $permission->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">هیچ رکوردی وجود ندارد.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
@endsection