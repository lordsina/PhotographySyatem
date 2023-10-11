@extends('layouts.app')

@section('content')
 <h1>تالار ها</h1>
    <a href="{{ route('invoices.create') }}" class="btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ایجاد فاکتور </a>

    <table class="table">
        <thead>
            <tr>
                <th>ایدی</th>
                <th>تالار</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="{{ route('invoices.show', $invoice->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
                    <a href="{{ route('invoices.edit', $invoice->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline;" class="myform{{ $invoice->id }}" name="myform{{ $invoice->id }}" id="myform{{ $invoice->id }}" >
                            @method('DELETE')
                            @csrf
                        <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $invoice->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


