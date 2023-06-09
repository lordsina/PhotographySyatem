@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->phone}}</td>
      <td>{{$user->firstname}}</td>
      <td>{{$user->lastname}}</td>
    </tr>
    @endforeach
    </tbody>  
</table>
@endsection