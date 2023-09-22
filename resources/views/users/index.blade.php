@extends('layouts.app')
@section('content')
<div class="overflow-auto " style="max-height:375px;">
  <table  class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">نام کاربری</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->username}}</td>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>
          <a href="{{ route('users.show', $user->id) }}"><i class="fa-regular fa-eye fa-beat" style="color: #669c35;"></i></a>
          <a href="{{ route('users.edit', $user->id) }}"><i class="fa-regular fa-pen-to-square fa-beat" style="color: #fec700;"></i></a>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;" class="myform{{ $user->id }}" name="myform{{ $user->id }}" id="myform{{ $user->id }}" >
            @method('DELETE')
            @csrf
            <a href="javascript:{}" onclick="javascript:confirmSubmit({{ $user->id }})" ><i class="fa-solid fa-trash fa-beat" style="color: #e32400;"></i></a>
          </form>
      </td>
     
    </tr>
    @endforeach
    </tbody>  
  </table>
</div>

@endsection