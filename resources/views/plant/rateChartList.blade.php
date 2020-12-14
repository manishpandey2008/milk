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
				@foreach($users as $user)
				<li >
					<a href="#home" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled " id="home">
						<li>
							<a href="{{route('plant.home',['id'=>$user['user_id']])}}">Home</a>
						</li>
						<li>
							<a href="#">Daily Current Report</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#milk-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-tint"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled" id="milk-management">
						<li>
							<a href="{{route('plant.milk.collection.table',['id'=>$user['user_id']])}}">Milk Collection List</a>
						</li>
						<li>
							<a href="{{route('plant.milk.collection',['id'=>$user['user_id']])}}">Milk Collection Notification</a>
						</li>
						<li>
							<a href="#">Milk Dispatch List</a>
						</li>
						<li>
							<a href="#">Milk Dispatch</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#farmer-dasbord" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-users"></span> Members
					</a>
					<ul class="collapse list-unstyled " id="farmer-dasbord">
						
						<li>
							<a href="{{route('memberlist',['id'=>$user['user_id']])}}">All Members</a>
						</li>
						<li>						<li>
							<a href="{{route('registration',['id'=>$user['user_id'],'role'=>'society'])}}">Create Society</a>
						</li>
						<li>
							<a href="{{route('registration',['id'=>$user['user_id'],'role'=>'farmer'])}}">Create Farmer</a>
						</li>
						<li>
							<a href="{{route('registration',['id'=>$user['user_id'],'role'=>'staff'])}}">Create Staff</a>
						</li>
						<li>
							<a href="{{route('privatevehicle',['id'=>$user['user_id'],'role'=>'privetvehicle'])}}">Private Vehicle</a>
						</li>
						<li>
							<a href="{{route('registration',['id'=>$user['user_id'],'role'=>'vehicle_owner'])}}">Public Vehicle</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#root-master" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-road"></span> Root Master
					</a>
					<ul class="collapse list-unstyled " id="root-master">
						<li>
							<a href="{{route('rootmasterlist',['id'=>$user['user_id']])}}">Root Master List</a>
						</li>
						<li>
							<a href="{{route('newrootmasterform',['id'=>$user['user_id']])}}">Add New Root Master</a>
						</li>
					</ul>
				</li>
				
				<li class="active">
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled show" id="rate-chart">
						<li>
							<a href="{{route('ratechartlist',['id'=>$user['user_id']])}}">Current Reat Chart List</a>
						</li>
						<li>
							<a href="{{route('newratechartform',['id'=>$user['user_id']])}}">Create New Reat Chart</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
						<li>
							<a href="#">All Transition List</a>
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
							<a href="#">Working Vehicle List</a>
						</li>
						<li>
							<a href="#">Vehicle Appointed</a>
						</li>
						<li>
							<a href="#">Vehicle Tracker</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#ec" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-shopping-cart"></span> E-commerce
					</a>
					<ul class="collapse list-unstyled" id="ec">
						<li>
							<a href="{{route('plant.listofproduct',['id'=>$user['user_id']])}}">All Product List</a>
						</li>
						<li>
							<a href="{{route('plant.addproduct',['id'=>$user['user_id']])}}">Add New Product </a>
						</li>
						<!-- <li>
							<a href="#">Offer Controller</a>
						</li>
						<li>
							<a href="#">Page Controller</a>
						</li> -->
						<li>
							<a href="{{route('plant.allOrderList',['id'=>$user['user_id']])}}">Order List</a>
						</li>
						<li>
							<a href="{{route('plant.neworderlist',['id'=>$user['user_id']])}}">New Order List</a>
						</li>
					</ul>
				</li>
				@endforeach
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
					@foreach($users as $user)
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
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="ti-power-off"></span> Profile </a>
									
							</div>
							
						</li>

					</ul>
					@endforeach
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Rate Chart List</h3>
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
								<h3 class="wiget-title">PANDEY PLANT</h3>
								<h4 class="wiget-title">( <strong>PLANT</strong> ) </h4>
								<p>{{$user['user_id']}}</p>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h3 class="text-center"><u>Rate Chart List</u></h3>
					<div class="row">
						<div class="col-lg-6 col-sm-12 mx-auto">
							<div class="row">
								<div class="col-6 my-2">
									<select class="form-control" id="chart-name">
										<option value="">--* Select One *--</option>
										@foreach($chartList as $cl)
										<option value="{{$cl}}">{{$cl}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-6 my-2">
									<button class="btn btn-primary" id="shart-show">Show Chart</button>
								</div>
							</div>
						</div>
					</div>
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div class="row">
						<div class="col-12 mx-auto">
							<p class="text-center"><u>A-Cortege Chart</u><br>(S : 30 AND F: 40 )<br>Uploading Date :20/10/1997 </p>
						</div>
						<div class="table-responsive data-table">
							

							<!-- <a class="btn btn-primary">Update New</a> -->
						</div>
					</div>

					<div>
						
					</div>
					
				</div>
				<div class="container-fluid widget-area proclinic-box-shadow color-green my-3">
					
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
			$(document).on('click','#shart-show',function(){
				var dispId=$('#chart-name').val();
				
				$.post('{{ route("oneratechartlist")}}',{'data':dispId,'_token':$('input[name=_token]').val()},function(data){

					$('.data-table').html(data);
    			});

			});
		});
	</script>
</body>
</html>
