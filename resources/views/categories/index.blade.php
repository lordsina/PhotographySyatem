@extends('layouts.app')

@section('content')
    <h1>دسته بندی ها</h1>

    <a href="{{ route('categories.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد دسته بندی</a>

    <table class="table">
        <thead>
            <tr>
                <th>ایدی</th>
                <th>نام</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                        
                        <a href="{{ route('categories.edit', $category->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;" class="myform" name="myform" id="myform">
                            @method('DELETE')
                            @csrf
                        <a href="javascript:{}" onclick="javascript:confirmSubmit()" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection