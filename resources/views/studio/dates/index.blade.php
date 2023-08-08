@extends('layouts.app')
@section('content')
@foreach ($halls as $hall )
    <div>{{ $hall->name }}</div>
@endforeach
@endsection