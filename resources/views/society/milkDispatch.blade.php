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
				<li >
					<a href="#home" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled " id="home">
						<li>
							<a href="{{route('society.home',['id'=>$user['user_id']])}}">Home</a>
						</li>
						<li>
							<a href="#">Daily</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#farmer-dasbord" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-male"></span> Farmer
					</a>
					<ul class="collapse list-unstyled " id="farmer-dasbord">
						<li>
							<a href="{{ route('society.farmerlist',['id'=>$user['user_id']])}}">All Farmers</a>
						</li>
						<li>
							<a href="{{ route('society.registration',['id'=>$user['user_id'],'role'=>'farmer'])}}">Create Framer</a>
						</li>
						
					</ul>
				</li>
			
				<li >
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled " id="rate-chart">
						<li>
							<a href="#">Show All Chart</a>
						</li>
					</ul>
				</li>
				
				<li class="active">
					<a href="#milk-management" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-tint"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled show" id="milk-management">
						<li>
							<a href="{{ route('milkcollectiontable',['id'=>$user['user_id']])}}">Milk Collection Table</a>
						</li>
						<li>
							<a href="{{ route('milkcollection',['role1'=>'farmer','role2'=>$user['working_role'],'id'=>$user['user_id']])}}">New Collection</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchlist',['role'=>$user['working_role'],'id'=>$user['user_id']])}}">Milk Dispatch Table</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchform',['role'=>$user['working_role'],'id'=>$user['user_id']])}}">Milk Dispatch</a>
						</li>
					</ul>
				</li>
	
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
						<li>
							<a href="#">All Transition Data</a>
						</li>
						<li>
							<a href="#">New Transition</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#vehicle" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-truck"></span> Vehicle
					</a>
					<ul class="collapse list-unstyled" id="vehicle">
						
						<li>
							<a href="#">Vehicle Appointed</a>
						</li>
						<li>
							<a href="#">Vehicle Details</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#plant" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-shopping-cart"></span> E-commerce
					</a>
					<ul class="collapse list-unstyled" id="plant"> 
						<li>
							<a href="#">All Old Orders</a>
						</li>
						<li>
							<a href="{{route('society.neworder',['id'=>$user['user_id']])}}">New Order</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#profile" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled" id="profile">
						<li>
							<a href="#">Profile</a>
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
					<ul class="nav">
						<li class="nav-item">
							<span class="fa fa-bars" id="sidebarCollapse"></span>
						</li>
						
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="fa fa-user-o" id="sidebarCollapse"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>
									
									{{$user['first_name']." ".$user['mid_name']." ".$user['last_name']}}
								
								</h5>
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="ti-power-off"></span> Logout </a>
										<br>
									<a href="#"><span class="ti-power-off"></span> Profile </a>
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
					<h3 class="block-title">Milk Dispatch</h3>
				</div>

				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							{{$user['user_id']}}
						</li>
					</ol>
				</div>
			</div>

			<div class="container-fluid home ">
				<div class="row text-center">
					<div class="col-md-4 col-sm-10 mx-auto ">
						<div class="widget-area proclinic-box-shadow ">
							<div class="widget-right">
								<!-- <h3 class="wiget-title">{{$user['society_name']}}</h3> -->
								<h2 class="wiget-title"><strong>SOCIETY</strong>  </h2>
								<p>{{$user['phone_number']}}</p>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<div class="row">
						<div class="col-12 my-2">
							<p class="float-left"><strong>Date :</strong> {{date('d-m-Y')}}</p>
							<p class="float-right"><strong>Shift :</strong>
								@if(date("h")<12)
							 		{{date("h:i:sa")}}
							 	@else
							 		Evening
							 	@endif

							</p>
						</div>
					</div>
					<h3 class="text-center py-3"><strong>Milk Dispatch Receipt</strong></h3>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div>
						<form method="post" action="{{ route('milkdispatch',['role'=>$user['working_role'],'id'=>$user_id]) }}">
							@csrf
							<div class="row">
								<div class="col-lg-4 col-sm-10  my-2 form-group">
									<label>Socity ID<span style="color:red">*</span></label>
									<input type="text" name=""  readonly="" class="form-control" value="{{$user['user_id']}}">
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Vehicle ID</label>
									<input type="text" name="vehicleId"readonly="" class="form-control" value="{{$vehicle['vehicle_id']}}" >
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Vehicle Number</label>
									<input type="text" name="vehicleNumber" value="{{$vehicle['vehicle_number']}}" readonly=""  class="form-control" >
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Milk Weight <span style="color:red">*</span></label>
									<input type="text" name="milkWeight" placeholder="Enter Milk Weight"  class="form-control" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="2 number after decimal ">
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Milk CLR <span style="color:red">*</span></label>
									<input type="text" name="milkClr" placeholder="Enter Milk CLR Val"  class="form-control" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="2 number after decimal ">
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Milk SNF <span style="color:red">*</span></label>
									<input type="text" name="milkSnf" placeholder="Enter Milk CLR Val"  class="form-control" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="2 number after decimal ">
								</div>
								<div class="col-lg-4 col-sm-10  my-2">
									<label>Milk Rate<span style="color:red">*</span></label>
									<input type="text" name="milkRate" placeholder="Enter Milk CLR Val"  class="form-control" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01" title="2 number after decimal ">
								</div>
								<div class="col-12 my-2 ">
									<button class="btn btn-primary ">Sell Milk</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- <div class="container-fluid widget-area proclinic-box-shadow color-green my-3">
	
				</div> -->

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
	</div>
		<!-- /Page Content -->
	
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
</body>
</html>
