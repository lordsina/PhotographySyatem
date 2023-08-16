@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">دسترسی</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->phone_number}}</td>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>
        {{ json_encode($user->getRoleNames(), JSON_UNESCAPED_UNICODE)  }} 

      </td>
      <td>


        <?php $ps= $user->getPermissionsViaRoles() ?>
        @foreach ($ps as $p )
          {{ $p->name }}
        @endforeach
        

      </td>
    </tr>
    @endforeach
    </tbody>  
</table>
@endsection