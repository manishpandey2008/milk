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
	<link rel="stylesheet" href="{{ asset('/css/css/themify-icons.css') }}">
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
				<li >
					<a href="{{ route('staff.home',['plantId'=>$plantId,'id'=>$user_id])}}" aria-expanded="false">
						<span class="fa fa-home"></span> Home
					</a>
				</li>
				<li>
					<a href="{{ route('staff.transaction',['plantId'=>$plantId,'id'=>$user_id])}}" aria-expanded="false">
						<span class="fa fa-inr"></span> Transaction 
					</a>
				</li>
				@if($designation=='driver')
				<li class="active">
					<a href="{{ route('staff.vehicledetails',['plantId'=>$plantId,'id'=>$user_id])}}"aria-expanded="true">
						<span class="fa fa-truck"></span> Vehicle
					</a>
				</li>
				@endif
				<li>
					<a href="#ec" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-cart-arrow-down"></span> E-commerce
					</a>
					<ul class="collapse list-unstyled" id="ec">
						<li>
							<a href="#">New Order </a>
						</li>
						<li>
							<a href="#">Order List</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{ route('staff.notification',['plantId'=>$plantId,'id'=>$user_id])}}" aria-expanded="false">
						<span class="fa fa-commenting-o"></span> Notifications
					</a>
					
				</li>
				<li>
					<a href="{{ route('staff.profile',['plantId'=>$plantId,'id'=>$user_id])}}"  aria-expanded="false">
						<span class="fa fa-user"></span> Your Profile
					</a>
				</li>
				
			</ul>
			
		</nav>

		<!-- /Sidebar -->
		<!-- Page Content -->
	@foreach($users as $user)
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
									
									{{$user['first_name']." ".$user['mid_name']." ".$user['last_name']}}
								
								</h5>
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="ti-power-off"></span> Logout </a>
										<br>
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="ti-power-off"></span> Profile </a>
									
							</div>
							
						</li>

					</ul>
				
				</div>
			</nav>
			
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Vehicle Milk Collection</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							{{$user['user_id']}}
						</li>
					</ol>
				</div>
			</div>

			<div class="container-fluid home">
				
				<div class="widget-area proclinic-box-shadow  my-3">
					<h2 class="text-center py-3"><strong>Current Society Milk Collection Table</strong></h2>
					<div class="row">
						<div class="col-lg-6 col-sm-12 mx-auto my-2">
							<input type="text" name="" class="form-control" placeholder="Search..........." style="width: 100%">
						</div>
					</div>
					<div class="row">
						<div class="col-12 table-responsive my-4">
							<table class="table text-center table-bordered table-hover table-striped " >
							  <thead >
							    <tr>
								  <th scope="col">Dispatch Id</th>
								  <th scope="col">Society Id</th>
							      <th scope="col">Date</th>
								  <th scope="col">Shift</th>
							      <th scope="col">Milk Wight (kg)</th>
							      <th scope="col">Milk CLR </th>
							      <th scope="col">Milk SNF </th>
							      <th scope="col">Milk Rate</th>
							      <th scope="col">Conformation</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($dispatch_list as $dl)
							  	<tr>
							  		@php
							  			$date=explode(" ",$dl['created_at'])[0];

							  			$time=explode(':',explode(" ",$dl['created_at'])[1])[0];
							  		@endphp
							  	<td>{{$dl['dispatch_id']}}</td>
							    <td>{{$dl['from_id']}}</td>
							    <td>{{$date}}</td>
							    <td>
							    	@if($time>14)
							    		Evening
							    	@else
							    		Morning
							    	@endif
							    </td>
							    <th>{{$dl['milk_weight']}}</th>
							    <th>{{$dl['milk_clr']}}</th>
							    <th>{{$dl['milk_snf']}}</th>
							    <th>{{$dl['milk_rate']}}</th>
							    <td>
							    	<button class="btn btn-primary conformation-btn" value="{{$dl['dispatch_id']}}">OK</button>
							    	<button class="btn btn-danger not-conformation-btn" value="{{$dl['dispatch_id']}}">No</button>
							    </td>
							    </tr>
							    @endforeach
							  </tbody>
							</table>
						</div>
					</div>

				</div>

				<div class="container-fluid my-3 widget-area ">
					<div class="row footer">
						<div class="col-12 text-center my-5">
							<h5><span class="ti-comments"></span> Need Help</h5>
							<h6><strong>Pandey Plant</strong></h6>
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
	@endforeach
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
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.conformation-btn',function(){
				$(this).attr('disabled',true);
				var dispId=$(this).val();
				console.log(dispId);
				$.post('{{ route("vehicle.conformation")}}',{'data':dispId,'_token':$('input[name=_token]').val()},function(data){

					console.log(data);
    			});

			});
		});
	</script>
</body>
</html>
