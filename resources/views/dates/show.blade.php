@extends('layouts.app')

@section('content')
 <h1>مراسم ها</h1>

    <form action="{{ route('invoices.store') }}" method="post" class="myform mt-5" name="myform" id="myform">
        @csrf
        <input type="hidden" name="date_id" value="{{ $date->id }}">
        <div class="form-group">
            <label for="place">تالار</label>
            <select class="form-control" id="place" name="place_id" required>
                <option value="">انتخاب تالار</option>
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name }}</option>
                @endforeach
            </select>
        </div>

        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد تالار </a>
        <br>
        <hr>
        <a href="{{ route('dates.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>ایدی</th>
                <th>تالار</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($date->invoices as $invoice)
            <tr>
                <td>{{  $invoice->place->name }}</td>
                <td></td>
                <td>
                    <a href="{{ route('invoices.show', $invoice->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                    <a href="{{ route('invoices.edit', $invoice->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline;" class="myform{{ $invoice->id }}" name="myform{{ $invoice->id }}" id="myform{{ $invoice->id }}" >
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