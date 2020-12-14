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
				
				<li class="active">
					<a href="#milk-management" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-tint"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled show" id="milk-management">
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
				<li>
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
				
				<li >
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled " id="rate-chart">
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
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="ti-power-off"></span> Profile </a>
									
							</div>
							
						</li>

					</ul>
				
				</div>
			</nav>
			
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Home</h3>
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
					<h2 class="text-center py-3"><strong>Current Milk Collection Conformation</strong></h2>
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
								  <th scope="col">Vehicle Id</th>
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
							    <td>{{$dl['vehicle_id']}}</td>
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
							    	<div class="btn-group">
				                      <button type="button" class="btn btn-sm btn-outline-secondary ok-conformation" value="{{$dl['dispatch_id']}}">Ok</button>
				                      <button type="button" class="btn btn-sm btn-outline-secondary edit-conformation" value="{{$dl['dispatch_id']}}" data-toggle="modal" data-target="#myModal">Edit</button>
				                    </div>
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

	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="container">
	      	<form method="post" action="{{ route('plant.milk.save.edit.data')}}">
	      		@csrf
	      		<div class="row">
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>Dispatch Id</label>
		      				<input type="text" name="dispatch_id" required="" readonly=""  class="form-control" id="dispatch_id">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>New Weight</label>
		      				<input type="text" name="new_weight" required=""   class="form-control" id="new_weight">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>New CLR</label>
		      				<input type="text" name="new_clr" required=""  class="form-control" id="new_clr">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>New SNF</label>
		      				<input type="text" name="new_snf" required=""  class="form-control" id="new_snf">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>New Rate</label>
		      				<input type="text" name="new_rate" required=""  class="form-control" id="new_rate">
		      			</div>
	      			</div>
	      			<div class="col-lg-6 col-sm-12">
	      				<div class="form-group">
		      				<label>Massage</label>
		      				<textarea name="msg"></textarea>
		      			</div>
	      			</div>
	      			<div class="col-12">
	      				<button type="submit" class="btn btn-primary">Save changes</button>
	      			</div>
	      		</div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

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
			$(document).on('click','.ok-conformation',function(){
				$(this).attr('disabled',true);
				var dispId=$(this).val();
				$.post('{{ route("plant.milk.collection.conformation")}}',{'data':dispId,'_token':$('input[name=_token]').val()},function(data){

					
    			});

			});

			$(document).on('click','.edit-conformation',function(){
				//$(this).attr('disabled',true);
				var dispId=$(this).val();

				$.post('{{ route("get.editing.data")}}',{'data':dispId,'_token':$('input[name=_token]').val()},function(data){

						$('#dispatch_id').val(dispId);
						$('#new_weight').val(data['weight']);
						$('#new_clr').val(data['clr']);
						$('#new_snf').val(data['snf']);
						$('#new_rate').val(data['rate']);

    			});
			});
		});
	</script>
</body>
</html>
