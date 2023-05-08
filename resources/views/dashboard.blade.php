@extends('layouts.app')
@section('content')
<div class="row align-items-start">
    <div class="col">
        @foreach ($users as $user)
            {{ $user->firstname }}
        @endforeach
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
@endsection