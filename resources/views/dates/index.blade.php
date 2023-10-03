@extends('layouts.app')

@section('content')
 <h1>تاریخ ها</h1>
    <a href="{{ route('dates.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تاریخ </a>

    <table class="table">
        <thead>
            <tr>
                <th>ایدی</th>
                <th>تاریخ ها</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dates as $date)
            <tr>
                <td>{{ $date->id }}</td>
                <td>{{ $date->date }}</td>
                <td>
                    <a href="{{ route('dates.show', $date->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                    <a href="{{ route('dates.edit', $date->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                    <form action="{{ route('dates.destroy', $date->id) }}" method="POST" style="display: inline;" class="myform{{ $date->id }}" name="myform{{ $date->id }}" id="myform{{ $date->id }}" >
                            @method('DELETE')
                            @csrf
                        <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $date->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


