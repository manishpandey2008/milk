<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plant Home</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="../image/png" href="{{ asset('css/images/fav.png') }}">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ asset('/css/css/bootstrap.min.css') }}">
	<!-- themify icons CSS -->
	<!-- <link rel="stylesheet" href="{{ asset('/css/css/themify-icons.css') }}"> -->
	<!-- Animations CSS -->
	<link rel="stylesheet" href="{{ asset('/css/css/animate.css') }}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('/css/css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/css/red.css') }}" id="style_theme">
	<link rel="stylesheet" href="{{ asset('/css/css/responsive.css') }}">
	<!-- morris charts -->
	<!-- <link rel="stylesheet" href="{{ asset('/charts/css/morris.css') }}"> -->
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ asset('/css/css/jquery-jvectormap.css') }}">

	<script src="{{ asset('/js/js/modernizr.min.js') }}"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="#"><img src="" class="logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled show" id="nav-dashboard">
						<li>
							<a href="{{ route('farmer.home')}}">Current Reports</a>
						</li>
						<li>
							<a href="{{ route('farmer.alldata')}}">Total Milk Report</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-inr"></span> Transaction
					</a>
					<ul class="collapse list-unstyled " id="nav-patients">
						<li>
							<a href="{{ route('farmer.transition')}}">All Payment</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#shop" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-shopping-cart"></span> Shope
					</a>
					<ul class="collapse list-unstyled " id="shop">
						
						<li>
							<a href="{{ route('farmer-order-list')}}">Order List</a>
						</li>
						<li>
							<a href="{{ route('farmer-order-new')}}">New Order</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="{{ route('farmer.profile')}}">Profile</a>
						</li>
						
					</ul>
				</li>
				
			</ul>
			
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="#"><img src class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="fa fa-bars" id="sidebarCollapse"></span>
						</li>
						
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="fa fa-user" id="sidebarCollapse"></span>
							</a>
					
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>
									
									{{$fp['first_name']." ".$fp['mid_name']." ".$fp['last_name']}}
								
								</h5>
									<a href="{{route('plant.logout',['id'=>$user_id])}}"><span class="fa fa-sign-out"></span> Logout </a>
										<br>
									<a href="{{ route('farmer.profile',['plantId'=>$plant_id,'id'=>$user_id])}}"><span class="fa fa-user"></span> Profile </a>
									
							</div>
							
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Home</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							{{$user_id}}
						</li>
					</ol>
				</div>
			</div>

			<div class="container-fluid home">
				<div class="row">
					<div class="col-md-4 mx-auto">
						<div class="widget-area proclinic-box-shadow color-red text-center">
							<div class="">
								<h3 class="wiget-title my-2">{{$fp['first_name'].' '.$fp['mid_name'].' '.$fp['last_name']}}</h3>
								<p class="mb-2">( FARMER )<br><strong>{{$user_id}}</strong><br>{{$fp['phone_number']}}<br>Society ID :<strong> {{$fp['society_id']}}</strong></p>
							</div>
						</div>
					</div>
				</div>

				
				<div class="container-fluid widget-area proclinic-box-shadow  my-3 text-center">
					<div>
						<h3 class=" py-3"><strong>Current Milk Data</strong></h3>
						<!-- <p>PlaSE Conform Your Milk Current Milk Collection Status</p> -->
					</div>
					<div class="devision_line"></div>
					<div class="row">
						<div class="col-12" id="farmer_dasbord_table">
							<table class="table text-center table-bordered table-hover table-striped " >
							  <thead >
							    <tr>
							      <th scope="col">Date</th>
							      <th scope="col">Shift</th>
							      <th scope="col">Milk Wight (kg)</th>
							      <th scope="col">Milk CLR Val</th>
							      <th scope="col">Milk SNF Val</th>
							      <th scope="col">Milk Fate</th>
							      <th scope="col">Total Price </th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($new_milk_coll as $nmc)
							  		@php
							  		$date=explode(' ',$nmc['updated_at'])[0];
							  		$time=explode(':',explode(' ',$nmc['updated_at'])[1])[0];
							  		@endphp
							    <tr>
							      <td>
							    {{ $date}}
							  	  </td>
							      <td>
							      	@if($time>=14)
							      	Evening
							      	@else
							      	Morning
							      	@endif
							      </td>
							      <td>{{$nmc['milk_weight']}}</td>
							      <td>{{$nmc['milk_clr']}}</td>
							      <td>{{$nmc['milk_snf']}}</td>
							      <td>{{$nmc['milk_rate']}}</td>
							      <td>{{$nmc['milk_price']}}</td>
							      <td>
							      	<button class="btn btn-primary conformation-btn" value="{{$nmc['collectionId']}}">Done</button>
							      </td>
							    </tr>
							    @endforeach
							  </tbody>
							</table>
						</div>
					</div>
					
				</div>
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h3 class="text-center py-3"><strong>Last 10 Milk Collection Report</strong></h3>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div class="row">
						<div class="table-responsive">
							<table class="table text-center table-bordered table-hover table-striped " >
							  <thead >
							    <tr>
							      <th scope="col">Date</th>
							      <th scope="col">Shift</th>
							      <th scope="col">Milk Wight (kg)</th>
							      <th scope="col">Milk CLR Val</th>
							      <th scope="col">Milk SNF Val</th>
							      <th scope="col">Milk Fate</th>
							      <th scope="col">Total Price </th>
							    </tr>
							  </thead>
							  <tbody>
							  	<tbody>
							  		@foreach($milk_coll as $nmc)
							  			@php
							  			$date=explode(' ',$nmc['created_at'])[0];
							  			$time=explode(':',explode(' ',$nmc['created_at'])[1])[0];
							  			@endphp
							  	  <tr>
							  	    <td>
							  	  {{ $date}}
							  		  </td>
							  	    <td>
							  	    	@if($time>=14)
							  	    	Evening
							  	    	@else
							  	    	Morning
							  	    	@endif
							  	    </td>
							  	    <td>{{$nmc['milk_weight']}}</td>
							  	    <td>{{$nmc['milk_clr']}}</td>
							  	    <td>{{$nmc['milk_snf']}}</td>
							  	    <td>{{$nmc['milk_rate']}}</td>
							  	    <td>{{$nmc['milk_price']}}</td>
							  	  </tr>
							  	  @endforeach
							  	</tbody>
							  </tbody>
							</table>
						</div>
					</div>
					<div>
						
					</div>
					
				</div>
				<div class="container-fluid my-3 widget-area ">
					<div class="row footer">
						<div class="col-12 text-center my-5">
							<h5><span class="ti-comments"></span> Need Help</h5>
							<h6><strong>Pandey Socity</strong></h6>
							<h6><span class="ti-mobile"></span> 9798316421</h6>
							<h6><span class="ti-email"></span> smpandey.2008@gmail.com</h6>
						</div>	
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	{{csrf_field()}}
	<!-- Jquery Library-->
	<script src="{{ asset('/js/js/jquery-3.2.1.min.js') }}"></script>
	<!-- Popper Library-->
	<script src="{{ asset('/js/js/popper.min.js') }}"></script>
	<!-- Bootstrap Library-->
	<script src="{{ asset('/js/js/bootstrap.min.js') }}"></script>
	<!-- morris charts -->
	<script src="{{ asset('/js/charts/js/raphael-min.js') }}"></script>
	<!-- <script src="{{ asset('/js/js/modernizr.min.js') }}../charts/js/morris.min.js"></script> -->
	<script src="{{ asset('/js/js/custom-morris.js') }}"></script>

	<!-- Custom Script-->
	<script src="{{ asset('/js/js/custom.js') }}"></script>
	<script src="{{ asset('/js/js/farmer-dasbord.js') }}"></script>
	<script src="{{ asset('/js/js/dairy.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.conformation-btn',function(){
				$(this).attr('disabled',true);
				$collId=$(this).val();

				$.post('{{ route("farmer.conformation")}}',{'data':$collId,'_token':$('input[name=_token]').val()},function(data){

					console.log(data);
    			});

			})
		});
	</script>
</body>
</html>
