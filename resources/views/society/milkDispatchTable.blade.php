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
					<h3 class="block-title">Milk Management >> Milk Dispatch Table</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								{{$user['user_id']}}
							</a>
						</li>
					</ol>
				</div>
			</div>

			<div class="container-fluid home ">
				<div class="row text-center">
					<div class="col-md-4 col-sm-10 mx-auto ">
						<div class="widget-area proclinic-box-shadow ">
							<div class="widget-right">
								<h3 class="wiget-title">Pandey Society</h3>
								<h4 class="wiget-title">( <strong>SOCIETY</strong> ) </h4>
								<p>9798316421</p>
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h3 class="text-center py-3"><u>Milk Dispatch Table</u></h3>
					<hr>

					<div class="row">
						<div class="col-12 table-responsive my-4">
							<table class="table text-center table-bordered table-hover table-striped " id="myTable">
							  <thead >
							    <tr>
								  <th scope="col">Dispatch Id</th>
							      <th scope="col">Date</th>
								  <th scope="col">Shift</th>
							      <th scope="col">Milk Wight (kg)</th>
							      <th scope="col">Milk CLR </th>
							      <th scope="col">Milk SNF </th>
							      <th scope="col">Milk Fat</th>
							      <th scope="col">Vehicle Status</th>
							      <th scope="col">Receipt</th>
							      <th scope="col">Collecter Status</th>
							      <th scope="col">Payment Receipt</th>
							      <th scope="col">Details</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($dispatch_list as $dl)
							  		@php
							  			$date=explode(" ",$dl['created_at'])[0];
							  		
							  			$time=explode(':',explode(" ",$dl['created_at'])[1])[0];
							  		@endphp
							    <tr>
							    	<th>{{$dl['dispatch_id']}}</th>
							    	<th>{{$date}}</th>
							    	<th>
							    		@if($time>14)
							    		Evening
							    		@else
							    		Morning
							    		@endif
							    	</th>
							    	<th>{{$dl['milk_weight']}}</th>
							    	<th>{{$dl['milk_clr']}}</th>
							    	<th>{{$dl['milk_snf']}}</th>
							    	<th>{{$dl['milk_rate']}}</th>
							    	<th>
							    		@if($dl['vehicle_status']=='1')
							    		<p class="text-success">Yes</p>
							    		@else
							    		{{$dl['vehicle_status']}}
							    		@endif
							    	</th>
							    	<th>
							    		@if($dl['vehicle_status']=='1')
							    		<a class="page-link" href="{{route('downloadvehicleinvoice',['id'=>$user_id,'vehicleId'=>$dl['vehicle_id'],'dispatchId'=>$dl['dispatch_id']])}}" class="" ><span class="fa fa-download"></span> </a>
							    		@else
							    		<a class="page-link" href="#"><span class="fa fa-download" style="pointer-events: none"></span></a>
							    		@endif
							    	</th>
							    	<th>
							    		@if($dl['collector_status']=='yes')
							    		<p class="text-success">{{$dl['collector_status']}}</p>
							    		@elseif($dl['collector_status']=='No')
							    		<p class="text-danger">{{$dl['collector_status']}}</p>
							    		@else
							    		<p></p>
							    		@endif
							    	</th>
							    	<th>
							    		@if($dl['collector_status']=='yes' or $dl['collector_status']=='No')
							    		<a  class="page-link" href="{{route('downloadcollecterinvoice',['id'=>$user_id,'collecterId'=>$dl['collector_id'],'dispatchId'=>$dl['dispatch_id']])}}"><span class="fa fa-download" ></span> </a>
							    		@else
							    		<a type="button" class="page-link" href="#" style="pointer-events: none"><span class="fa fa-download" ></span> </a>
							    		@endif
							    	</th>
							    	<th>
							    		@if($dl['collector_status']=='yes' or $dl['collector_status']=='No')
							    		<button class="btn btn-primary get_plant_data" data-toggle="modal" data-target=".myModal" value="{{$dl['dispatch_id']}}">Details</button>
							    		@else
							    		<button class="btn btn-primary" disabled="">Details</button>
							    		@endif
							    	</th>
							    </tr>
							    @endforeach
							  </tbody>
							</table>
						</div>
						<!-- <div class="col-12">
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center export-pagination">
									<li class="page-item">
										<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#"><span class="ti-align-justify"></span> Excel</a>
									</li>
								</ul>
							</nav>
						</div> -->
					</div>
				</div>

<div class="modal fade myModal" tabindex="-1" role="dialog" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="container">
	      	<form method="post" action="{{ route('plant.milk.save.edit.data')}}">
	      		@csrf
	      		<div class="row">
	      			<div class="col-lg-6 col-sm-12" id="dispatch_id_div">
	      				<div class="form-group">
		      				<label>Dispatch Id</label>
		      				<input type="text" name="dispatch_id" required="" readonly=""  class="form-control" id="dispatch_id">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12" id="new_weight_div">
	      				<div class="form-group">
		      				<label>New Weight</label>
		      				<input type="text" name="new_weight" required=""   class="form-control" id="new_weight" readonly="">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12" id="new_clr_div">
	      				<div class="form-group">
		      				<label>New CLR</label>
		      				<input type="text" name="new_clr" required=""  class="form-control" id="new_clr" readonly="">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12" id="new_snf_div">
	      				<div class="form-group">
		      				<label>New SNF</label>
		      				<input type="text" name="new_snf" required=""  class="form-control" id="new_snf" readonly="">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12" id="new_rate_div">
	      				<div class="form-group">
		      				<label>New Rate</label>
		      				<input type="text" name="new_rate" required=""  class="form-control" id="new_rate" readonly="">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>Massage</label>
		      				<textarea name="msg" id="msg" readonly=""></textarea>
		      			</div>
	      			</div>
	      			<div class="col-12">
	      				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      			</div>
	      		</div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->




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
			$(document).on('click','.get_plant_data',function(){
				
				var dispId=$(this).val();

				$.post('{{ route("plantfinaldata")}}',{'data':dispId,'_token':$('input[name=_token]').val()},function(data){


					$('#dispatch_id').val(data['dispatch_id']);
					if(data['collector_status']=='No')
					{
					$('#new_clr').val(data['new_milk_clr']);
					$('#new_weight').val(data['new_milk_weight']);
					$('#new_snf').val(data['new_milk_snf']);
					$('#new_rate').val(data['new_milk_rate']);
					}
					else{
					$('#new_clr_div').hide();
					$('#new_weight_div').hide();
					$('#new_snf_div').hide();
					$('#new_rate_div').hide();
					}
					$('#msg').text(data['collector_msg']);

    			});

			});
		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		} );
	</script>
</body>
</html>
