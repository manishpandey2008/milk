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
				<li>
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
				<li class="active">
					<a href="#farmer-dasbord" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-male"></span> Farmer
					</a>
					<ul class="collapse list-unstyled show" id="farmer-dasbord">
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
				
				<li >
					<a href="#milk-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-tint"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled" id="milk-management">
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
					<h3 class="block-title">{{$fp['first_name'].' '.$fp['mid_name'].' '.$fp['last_name']}} Profile</h3>
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
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-3"><strong>Farmer Profile</strong></h4>

					<div class="row">
						<div class="col-lg-4 col-sm-12 mx-auto">
							<div class="img-div my-5 text-center">
								<img src="{{ asset('storage/image/user.jpg') }}">
								<p><span id="name">{{$fp['first_name'].' '.$fp['mid_name'].' '.$fp['last_name']}}</span><br>( {{$fp['working_role']}} )<br><strong>{{$fp['user_id']}}</strong><br>{{$fp['phone_number']}}</p>
							</div>
							<div class="profile-main">
								
							</div>
						</div>
						<div class="col-lg-6 col-sm-10 mx-auto">
							<div class="">
								<div class="all-profile my-5" style="width: 100%">
									<h5 class=" mb-2 mx-3"><strong>Profile</strong></h5>
									<div class="devision_line"></div>
									<table class="mt-3 table">
										<tbody>
										<tr>
											<td class="col"><strong> Working Role </strong></td>
											<td class=" col">:</td>
											<td class="col">{{$fp['working_role']}}</td>
										</tr>
										<tr>
											<td class="col"><strong> Father Name </strong></td>
											<td class="col">:</td>
											<td id="f_name" class="col">{{$fp['father_name_eng']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Plant Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['plant_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>BMC Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['bmc_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Socity Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['society_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Email</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['email']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Route No</strong></td>
											<td class="col">:</td>
											<td class="col">1</td>
										</tr>
										<tr >
											<td class="col"><strong>Village</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['village_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Full Add</strong></td>
											<td class="col">:</td>
											<td id="add" class="col">{{$fp['address']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>PIN Code</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['pin_code']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Emergency Number</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['emergency_contact_number']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bood Group</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['bood_group']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Anniversary Date</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['anniversary_date']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Payee Name</strong></td>
											<td class="col">:</td>
											<td id="payee_name" class="col">{{$fp['payee_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Name</strong></td>
											<td class="col">:</td>
											<td id="bank_name" class="col">{{$fp['bank_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Acount No</strong></td>
											<td class="col">:</td>
											<td id="ac_no" class="col">{{$fp['account_number']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank IFSC No</strong></td>
											<td class="col">:</td>
											<td id="ifsc_no" class="col">{{$fp['ifsc_code']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Aadhar No.</strong></td>
											<td class="col">:</td>
											<td id="ifsc_no" class="col">{{$fp['aadhar_number']}}</td>
										</tr>
										</tbody>
									</table>
									
								</div>
								<div class="edit_btn my-5">
									<button class="btn btn-primary" data-toggle="modal" data-target="#editModel" id="edit">Edit Profile</button>
								</div>
							</div>
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
