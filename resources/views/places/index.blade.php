@extends('layouts.app')

@section('content')
 <h1>تالار ها</h1>
    <a href="{{ route('places.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تالار </a>

    <table class="table">
        <thead>
            <tr>
                <th>ایدی</th>
                <th>نام</th>
                <th>توضیحات</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($places as $place)
            <tr>
                <td>{{ $place->id }}</td>
                <td>{{ $place->name }}</td>
                <td>{{ $place->description }}</td>
                <td>
                    <a href="{{ route('places.show', $place->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                    <a href="{{ route('places.edit', $place->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                    <form action="{{ route('places.destroy', $place->id) }}" method="POST" style="display: inline;" class="myform{{ $place->id }}" name="myform{{ $place->id }}" id="myform{{ $place->id }}" >
                            @method('DELETE')
                            @csrf
                        <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $place->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


