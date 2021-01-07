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
	<!-- <link rel="stylesheet" href="{{ asset('/css/css/themifyicons.css') }}"> -->
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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
					<a href="#home" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled show" id="home">
						<li>
							<a href="{{route('society.home')}}">Home</a>
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
							<a href="{{ route('society.farmerlist')}}">All Farmers</a>
						</li>
						<li>
							<a href="{{ route('society.registration')}}">Create Framer</a>
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
							<a href="{{ route('milkcollectiontable')}}">Milk Collection Table</a>
						</li>
						<li>
							<a href="{{ route('milkcollection')}}">New Collection</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchlist')}}">Milk Dispatch Table</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchform')}}">Milk Dispatch</a>
						</li>
					</ul>
				</li>
	
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
						<li>
							<a href="{{ route('society-allTransaction')}}">All Transition Data</a>
						</li>
						<li>
							<a href="{{ route('society-newTransaction')}}">New Transition</a>
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
							<a href="{{route('society-order-list')}}">All Orders List</a>
						</li>
						<li>
							<a href="{{route('society.neworder')}}">New Order</a>
						</li>
						<li>
							<a href="{{route('society-sell-list')}}">All Sell List</a>
						</li>
						<li>
							<a href="{{route('society.newsell')}}">New Sell</a>
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
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">New Transaction</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							{{$user['user_id']}}
						</li>
					</ol>
				</div>
			</div>
			<!-- Page Title -->
			<div class="container-fluid home ">
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-3"><strong>Transaction List</strong></h4>
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div class="row my-4">
						<div class="col-lg-5 col-sm-10 mx-auto">
							<button class="btn btn-success" style="width: 100%;" id="creditBtn">Credit List</button>
						</div>
						<div class="col-lg-5 col-sm-10 mx-auto">
							<button class="btn btn-primary" style="width: 100%" id="debitBtn">Debit  List</button>
						</div>
					</div>

				<div class="row">
					<div class="my-3 col-12">
						<h5 class="text-center" id="cr_name"><strong>Credit List</strong></h5>
						<h5 class="text-center" id="dr_name" style="display: none;"><strong>Debit List</strong></h5>
					</div>
					
					<div class="col-12 table-responsive my-2" id="creditBody">
						<table class="table text-center table-bordered table-hover table-striped  myTable"  >
							<thead >
								<tr>
									<th scope="col">No.</th>
									<th scope="col">User Id</th>
									<th scope="col">User Role</th>
									<th scope="col">Credit Amount</th>
									<th scope="col">Transiction Message</th>
									<th scope="col">Credit Type</th>
									<th scope="col">Transiction Photo</th>
								</tr>
							</thead>
							<tbody >
								@php
								$count=0
								@endphp
								@foreach($trToList as $ttl)
									@php
									$count=$count+1
									@endphp
								<tr>
									<td>{{$count}}</td>
									<td>{{$ttl['transaction_from_id']}}</td>
									<td>{{$ttl['transaction_from']}}</td>
									<td>{{$ttl['transaction_amount']}}</td>
									<td>{{$ttl['transaction_msg']}}</td>
									<td>{{$ttl['transaction_type']}}</td>
									<td>
										
										<img src="{{asset('storage/transactionPhoto/'.$ttl['transaction_photo'])}}" style="width: 70px;height: 70px;">
									</td>
								</tr>
								@endforeach

							</tbody>
							
						</table>
					</div>
					<div class="col-12 table-responsive my-2 " id="debitBody" style="display: none">

						<table class="table text-center table-bordered table-hover table-striped  myTable"   >
							<thead >
								<tr>
									<th scope="col">No.</th>
									<th scope="col">User Id</th>
									<th scope="col">User Role</th>
									<th scope="col">Debit Amount</th>
									<th scope="col">Transiction Message</th>
									<th scope="col">Debit Type</th>
									<th scope="col">Status</th>
									<th scope="col">Transiction Photo</th>
								</tr>
							</thead>
							<tbody>
								@php
								$count=0
								@endphp
								@foreach($trFromList as $ttl)
									@php
									$count=$count+1
									@endphp
								<tr>
									<td>{{$count}}</td>
									<td>{{$ttl['transaction_to_id']}}</td>
									<td>{{$ttl['transaction_to']}}</td>
									<td>{{$ttl['transaction_amount']}}</td>
									<td>{{$ttl['transaction_msg']}}</td>
									<td>{{$ttl['transaction_type']}}</td>
									<td>{{$ttl['transaction_to_status']}}</td>
									<td>
										<img src="{{asset('storage/transactionPhoto/'.$ttl['transaction_photo'])}}" style="width: 70px;height: 70px;">
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>


					</div>
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
	{{csrf_field()}}
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
	<script type="text/javascript">
		$(document).ready(function(event){
			$(document).on('click','#creditBtn',function(event){
				$('#debitBody').hide();
				$('#creditBody').show();

				$('#dr_name').hide();
				$('#cr_name').show();
			});

			$(document).on('click','#debitBtn',function(event){
				$('#creditBody').hide();
				$('#debitBody').show();

				$('#cr_name').hide();
				$('#dr_name').show();
			});
		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('.myTable').DataTable();
		} );
	</script>
</body>
</html>
