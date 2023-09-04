@extends('layouts.app')

@section('content')
 <h1>پست ها</h1>
    <a href="{{ route('posts.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد پست </a>

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
                <td>{{ $post->created_at->diffInDays(now()) }} روز قبل</td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                    <a href="{{ route('posts.edit', $post->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;" class="myform{{ $post->id }}" name="myform{{ $post->id }}" id="myform{{ $post->id }}" >
                            @method('DELETE')
                            @csrf
                        <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $post->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


