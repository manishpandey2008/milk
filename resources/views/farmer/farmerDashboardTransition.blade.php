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
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>Manish Pandey</h5>
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
					<h3 class="block-title">Transition</h3>
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
				

				<!-- <div class="widget-area proclinic-box-shadow color-green my-3">
					<div class="container">
						<form method="post" action="{{route('farmer.transition-year')}}">
							@csrf
							<div class="row">
								<div class="col-lg-3 col-sm-12 mx-auto my-2"  id="day_wise_find_div">
									<input type="" list="yearlist" name="year" class="form-control" placeholder="Select Year">
									<datalist id="yearlist">
										@for($i=$user['created_at']->year;$i<=date('Y');$i++)
										<option value="{{$i}}"></option>
										@endfor
									</datalist>
								</div>
								<div class="col-lg-3 col-sm-12 mx-auto my-2"  id="day_wise_find_div">
									<input type="" name="" list="monthlist" class="form-control" name="date" required="" placeholder="Select Month">
									<datalist id="monthlist">
									@for($i=1;$i<=12;$i++)
										<option value="{{$i}}"></option>
									@endfor
									</datalist>
								</div>
								<div class="col-lg-3 col-sm-12 mx-auto my-2">
									<button class="btn btn-primary my-2" style="width: 100%">Find </button>
								</div>
							</div>
						</form>
					</div>
				</div> -->
				<!-- <div class="row">
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow text-center">
							<div class="widget-right">
								<h4><strong>Opening Amount</strong></h4>
								<span class="numeric color-red">45000</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow text-center">
							<div class="widget-right">
								<h4><strong>Closing Amount</strong></h4>
								<span class="numeric color-green">1000</span>
							 <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p> -->
						<!-- 	</div>
						</div>
					</div> -->
					<!-- <div class="col-md-4">
						<div class="widget-area proclinic-box-shadow text-center">
							<div class="widget-right">
								<h4><strong>Curent Amount</strong></h4>
								<span class="numeric color-green">1000</span>
								 <p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p> 
							</div>
						</div>
					</div>
				</div>  -->

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-2">Transition Table</h4>
					<div class="row">
						<div class="col-12" id="farmer_dasbord_table">
							<div class="table-responsive mb-3">
								<table class="table table-bordered table-hover table-striped text-center" id="myTable">
									<thead>
										<tr>
											<th>Transition Type</th>
											<th>Transition ID</th>
											<th>Transition From</th>
											<th>Transition From ID</th>
											<th>Transition To</th>
											<th>Transition To ID</th>
											<th>Transition Amount</th>
											<th>Transition Date</th>
											<td>Transition Msg</td>
											<th>Status</th>
										</tr>
									</thead>
                                    <tbody>
                                    	@foreach($trCreadit as $tc)
                                        <tr style="background-color: rgb(176,215,176);">
                                        	<td>Creadit</td>
                                        	<td>{{$tc['transaction_id']}}</td>
                                            <td>{{$tc['transaction_from']}}</td>
                                            <td>{{$tc['transaction_from_id']}}</td>
                                            <td>{{$tc['transaction_to']}}</td>
                                            <td>{{$tc['transaction_to_id']}}</td>
                                            <td>{{$tc['transaction_amount']}}</td>
                                            <td>{{$tc['created_at']}}</td>
                                            <td>{{$tc['transaction_msg']}}</td>
                                            <td>
                                                <span class="badge badge-success">completed</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @foreach($trDebit as $td)
                                        <tr style="background-color: rgb(255,191,191);">
                                            <td>Creadit</td>
                                        	<td>{{$td['transaction_id']}}</td>
                                            <td>{{$td['transaction_from']}}</td>
                                            <td>{{$td['transaction_from_id']}}</td>
                                            <td>{{$td['transaction_to']}}</td>
                                            <td>{{$td['transaction_to_id']}}</td>
                                            <td>{{$td['transaction_amount']}}</td>
                                            <td>{{$td['created_at']}}</td>
                                            <td>{{$td['transaction_msg']}}</td>
                                            <td>
                                                <span class="badge badge-success">completed</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
								<!--Export links-->
								<!-- <nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center export-pagination">
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
										</li>
									</ul>
								</nav> -->
								
							</div>
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
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>
</body>
</html>
