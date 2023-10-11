@extends('layouts.app')

@section('content')
    <h1>ویرایش تاریخ</h1>
    <form action="{{ route('dates.update',$date->id) }}" method="post" class="myform" name="myform" id="myform">
        @csrf
        @method('PUT')
        <div class="form-group">
            <?php  $pre=Carbon\Carbon::parse($date->date) ?>
            <input style="text-align: center;" name="date" value="{{ $jDate = Morilog\Jalali\Jalalian::fromCarbon($pre)->format('Y/m/d'); }}" data-jdp>
        </div>
        <a href="javascript:{}" onclick="javascript:confirmSubmitn()" class="mt-4 btn mb-2 new-record-btn"><i class="fa-regular fa-file fa-beat" style="color: #00c7fc;"></i> ویرایش تاریخ </a>
    </form>
        <a href="{{ route('dates.index') }}" class="mt-4 btn mb-2 back-btn"><i class="fa-solid fa-backward" style="color: #e392fe;"></i> بازگشت </a>
@endsection