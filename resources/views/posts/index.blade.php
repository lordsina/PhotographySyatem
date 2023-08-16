@extends('layouts.app')

@section('content')
 <h1>پست ها</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-2">ایجاد پست </a>

    <table class="table">
        <thead>
            <tr>
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>نویسنده</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->user->username }}</td>
                <td>{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">نمایش</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">ویرایش</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
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


