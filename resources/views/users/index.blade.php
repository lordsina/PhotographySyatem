@extends('layouts.app')
@section('content')
<div class="overflow-auto " style="max-height:375px;">
  <table  class="table table-striped table-hover" >
  <thead>
    <tr>
      <th scope="col">ایدی</th>
      <th scope="col">شماره</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">دسترسیها</th>
      <th scope="col">مجوزها</th>
      <th scope="col">عملیات</th>
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
        {{json_encode($user->getRoleNames(),JSON_UNESCAPED_UNICODE)}}
      </td>
      <td>
        <?php 
         $ps= $user->getPermissionsViaRoles()
         ?>
        @foreach ($ps as $p )
          {{ $p->name ."-" }}
        @endforeach
      </td>
        
      <td>
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">ویرایش</a>
          <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">نمایش</a>
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('آیا از این کار مطما هستید؟')">حذف</button>
          <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
          @csrf
          </form>
      </td>
     
    </tr>
    @endforeach
    </tbody>  
  </table>
</div>

@endsection