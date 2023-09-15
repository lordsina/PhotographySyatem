@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">سیستم مدیریت</h1>
    <p class="lead">هر چیزی رو در هر جایی که هستی میتونی مدیریت و کنترول کنی</p>
    <div>
      <div class="row text-center  mx-auto" style="width: 300px; ">
        <div id="addver" class="rounded-circle pt-4 mx-auto " style="width: 5rem; height:5rem;"><i class="fa-solid fa-gauge fa-2xl" style="color: #ff8647;"></i> <br>سریع </div>
        <div class="rounded-circle pt-4 mx-auto" style="width: 5rem; height:5rem;"><i class="fa-solid fa-shield-halved fa-2xl" style="color: #000000;"></i> <br>ایمن</div>
        <div class="rounded-circle pt-4 mx-auto" style="width: 5rem; height:5rem;"><i class="fa-solid fa-chart-simple fa-2xl" style="color: #53d5fd;"></i> <br>ساده</div>
      </div>

    </div>
    
  </div>
</div>

@endsection