@extends('layouts.app')

@section('content')
    <h1>دسته بندی ها</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">ایجاد دسته بندی</a>

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
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">نمایش</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">ویرایش</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('آیا از این کار مطما هستید؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection