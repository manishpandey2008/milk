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
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Order Table</h3>
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
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-3"><strong>Order Table</strong></h4>
					<p class="text-center my-2" id="sell_conf_msg"></p>
					<div style="width:100%;height: 2px;background-color: black"></div>
					

					<div class="row">
						@php
						$count=0
						@endphp
						@foreach($order_list as $key => $value)

						<div class="col-12 my-2">
						@if($value[0]['order_by_status']=='1')
							<button style="width: 100%;background-color: rgb(191,255,191);border-radius: 10px;cursor: pointer;" data-toggle="collapse" href="#collapseExample{{$count}}" aria-expanded="false" aria-controls="collapseExample{{$count}}" value="{{$key}}" class="sell_list_button">

								<p class="pt-1 px-2"><span class="float-left"><strong>{{$key}}</strong></span><span class="float-right">{{$value[0]['created_at']}}</span></p>
							</button>
						@else
							<button style="width: 100%;background-color: rgb(255,255,198);border-radius: 10px;cursor: pointer;" data-toggle="collapse" href="#collapseExample{{$count}}" aria-expanded="false" aria-controls="collapseExample{{$count}}" value="{{$key}}" class="sell_list_button">

								<p class="pt-1 px-2"><span class="float-left"><strong>{{$key}}</strong></span><span class="float-right">{{$value[0]['created_at']}}</span></p>
							</button>
						@endif

							<div class="collapse" id="collapseExample{{$count}}" style="border: 1px solid black">
		
								<div class="row">
									<div class="col-12 table-responsive my-2">
										<div class="text-center my-2">
											<h5 style="color: rgb(170,85,0);"><strong>Current Status</strong></h5>
										</div>
										<table class="table text-center table-bordered table-hover table-striped " >
										  <thead >
										    <tr>
										      <th scope="col">Total Price</th>
											  <th scope="col">Plant Receiving Status</th>
										      <th scope="col">Plant Dispatch Status</th>
										      <th scope="col">Vehicle status</th>
										      <th scope="col">Your Conformation</th>
										    </tr>
										  </thead>
										  <tbody id="table1{{$key}}">
										  		
										  </tbody>
										</table>
									</div>
								</div>

								<div style="width:100%;height: 2px;background-color: black"></div>
								<div class="text-center my-2">
									<h5 style="color: rgb(170,85,0);"><strong>Product Details</strong></h5>
								</div>
								<div class="row">
									<div class="col-12 table-responsive my-2">
										<table class="table text-center table-bordered table-hover table-striped " >
										  <thead >
										    <tr>
											  <th scope="col">Name</th>
										      <th scope="col">Amount</th>
										      <th scope="col">Total Price</th>
										    </tr>
										  </thead>
										  <tbody id="table2{{$key}}">
										  		
										  </tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						@php
						$count+=1
						@endphp
						@endforeach
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
			$(document).on('click','.sell_list_button',function(){
				var val=$(this).val();
				var tabalid1='table1'+val;
				var tabalid2='table2'+val;

				$.post('{{ route("society-order-product-data")}}',{'data':val,'_token':$('input[name=_token]').val()},function(data){

							$("#"+tabalid1).html(data['html2']);
							$("#"+tabalid2).html(data['html1']);
    				});
			});

			$(document).on('click','.society_confom',function(){
				var val=$(this).val();
				var id='conf'+val;
				$.post('{{ route("society-order-conformation")}}',{'data':val,'_token':$('input[name=_token]').val()},function(data){
							$("#"+id).html(data);
    				});
			});
		});
	</script>
</body>
</html>
