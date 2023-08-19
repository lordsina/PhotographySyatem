@extends('layouts.app')
@section('content')
<div class="row align-items-start">
    <div class="col">
      <div class="m-2 p-1 rounded bg-info text-light" style="height: 100px;">
        <p>تعداد کل یوزهای سایت</p>
        <h5>{{ $users->count() }}</h5>
      </div>
    </div>
    <div class="col" >
      <div class="m-2 p-1 rounded bg-warning text-light" style="height: 100px;">
        <p>
          ثبت نام اخرین کاربر
        </p>
        <p>
          {{ $users->last()->first_name." ".$users->last()->last_name }}
        </p>

      </div>
    </div>
    <div class="col">
      <div class="m-2 p-1 rounded bg-danger text-light" style="height: 100px;">

      </div>
    </div>
  </div>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <hr>
  <div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
       <div class="col">
		 <div class="card radius-10 border-start border-0 border-3 border-info">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Total Orders</p>
						<h4 class="my-1 text-info">4805</h4>
						<p class="mb-0 font-13">+2.5% from last week</p>
					</div>
					<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-shopping-cart"></i>
					</div>
				</div>
			</div>
		 </div>
	   </div>
	   <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total Revenue</p>
					   <h4 class="my-1 text-danger">$84,245</h4>
					   <p class="mb-0 font-13">+5.4% from last week</p>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-dollar"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Bounce Rate</p>
					   <h4 class="my-1 text-success">34.6%</h4>
					   <p class="mb-0 font-13">-4.5% from last week</p>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-bar-chart"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <p class="mb-0 text-secondary">Total Customers</p>
					   <h4 class="my-1 text-warning">8.4K</h4>
					   <p class="mb-0 font-13">+8.4% from last week</p>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div> 
	</div>
</div>

@endsection