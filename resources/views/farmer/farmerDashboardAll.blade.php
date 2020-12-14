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
				<a href="index.html"><img src="" class="logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled show" id="nav-dashboard">
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Current Reports</a>
						</li>
						<li>
							<a href="{{ route('farmer.alldata',['plantId'=>$plant_id,'id'=>$user_id])}}">Total Milk Report</a>
						</li>
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Milk Notifiction</a>
						</li> 
					</ul>
				</li>
				<li >
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-inr"></span> Transaction
					</a>
					<ul class="collapse list-unstyled " id="nav-patients">
						<li>
							<a href="{{ route('farmer.transition',['plantId'=>$plant_id,'id'=>$user_id])}}">All Payment</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#shop" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-shopping-cart"></span> Shope
					</a>
					<ul class="collapse list-unstyled " id="shop">
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Shoping</a>
						</li>
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Order List</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled" id="nav-doctors">
						<li>
							<a href="{{ route('farmer.profile',['plantId'=>$plant_id,'id'=>$user_id])}}">Profile</a>
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
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
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
					<h3 class="block-title">ALL</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
						</li>
						
					</ol>
				</div>
			</div>

			<div class="container-fluid home">
				<div class="row">
					<!-- <div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-green">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Amount</h4>
								<span class="numeric ">45000</span>
								< <p class="inc-dec mb-0"><span class="ti-angle-up"></span> +20% Increased</p> 
							</div>
						</div>
					</div> -->
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-green">
							<div class="widget-left">
								<span class="ti-bar-chart"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Milk</h4>
								<span class="numeric color-green">1000 Kg</span>
								<!-- <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p> -->
							</div>
						</div>
					</div>
					<!-- <div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-yellow">
							<div class="widget-left">
								<span class="ti-money"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Revenue</h4>
								<span class="numeric color-yellow">$7300</span>
								<p class="inc-dec mb-0"><span class="ti-angle-up"></span> +10% Increased</p>
							</div>
						</div>
					</div> -->
				</div>

				<div class="widget-area proclinic-box-shadow color-green my-3">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-12 mx-auto my-2" id="find_pattern_div">
								<!-- <label>Select Option<span style="color: red"> *</span></label> -->
								<select class="form-control " id="find_pattern" required="">
									<option value="">--* Select One *--</option>
									<option value="day">Day</option>
									<option value="month">Month</option>
									<option value="year">Year</option>
								</select>
							</div>
							<div class="col-lg-3 col-sm-12 mx-auto my-2" style="display: none;" id="find_year_div">
								<!-- <label>Select Year<span style="color: red"> *</span></label> -->
								<select class="form-control" id="find_year" required="">
									<option value="">--* Select One *--</option>
									<option value="day">2020</option>
									<option value="month">2021</option>
									<option value="month">2022</option>
									<option value="month">2023</option>
									<option value="month">2024</option>
								</select>
							</div>
							<div class="col-lg-3 col-sm-12 mx-auto my-2" style="display:none ;" id="find_date_div">
							<!-- 	<label>Select Date<span style="color: red"> *</span></label> -->
								<input type="date" name="" class="form-control" id="find_date" required="">
							</div>
							<div class="col-lg-3 col-sm-12 mx-auto my-2" style="display: none;" id="find_month_div">
								<!-- <label>Select Month<span style="color: red"> *</span></label> -->
								<select class="form-control" id="find_month" required="">
									<option value="">--* Select One *--</option>
									<option value="day">January</option>
									<option value="month">February</option>
									<option value="month">March</option>
									<option value="month">April</option>
									<option value="month">May</option>
									<option value="month">June</option>
									<option value="month">July</option>
									<option value="month">August</option>
									<option value="month">September</option>
									<option value="month">October</option>
									<option value="month">November</option>
									<option value="month">December</option>

								</select>
							</div>
							<div class="col-lg-3 col-sm-12 mx-auto my-2">
								<button class="btn btn-primary my-2" style="width: 100%">Find </button>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid widget-area proclinic-box-shadow my-3">
					<h4 class="text-center py-3">Milk Data</h4>
					<div class="row">
						<div class="col-12" id="farmer_dasbord_table">
							<table class="table text-center table-hover" >
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">Date</th>
							      <th scope="col">Shift</th>
							      <th scope="col">Milk Wight (kg)</th>
							      <th scope="col">Milk CLR Val</th>
							      <th scope="col">Milk SNF Val</th>
							      <th scope="col">Milk RATE Val</th>
							      <th scope="col">Total Price </th>
							      <th scope="col">Download</th>
							    </tr>
							    
							  </thead>
							  <tbody>
							  	@foreach($new_milk_coll as $nmc)
							  		@php
							  		$date=explode(' ',$nmc['updated_at'])[0];
							  		$time=explode(':',explode(' ',$nmc['updated_at'])[1])[0];
							  		@endphp
							    <tr>
							    	<td> {{ $date}}</td>
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
							      		<a class="btn btn-primary" href="{{route('farmer.download',['plantId'=>$plant_id,'id'=>$user_id,'coll_id'=>$nmc['collectionId']])}}"><span class="fa fa-download"></span></a>
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
</body>
</html>
