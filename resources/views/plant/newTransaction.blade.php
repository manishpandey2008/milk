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
	 <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> -->
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
							<a href="{{route('registration',['id'=>$user['user_id'],'role'=>'outlet'])}}">Create Outlet</a>
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
				
				<li class="active">
					<a href="#payment-management" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled show" id="payment-management">
						<li>
							<a href="{{route('plant-allTransaction',['id'=>$user['user_id']])}}">All Transition List</a>
						</li>
						<li>
							<a href="{{route('plant-newTransaction',['id'=>$user['user_id']])}}">New Transition</a>
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
				<li >
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
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
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

			<div class="container-fluid home">
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-3"><strong>New Transaction</strong></h4>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					@if($msg != '0')
					<div class="row" id="msg_show">
						@if($type=='yes')
						<div class="col-lg-8 col-sm-12 mx-auto my-2" style="background-color:rgb(137,226,188); border-radius: 5px;">
							<h5 class="text-center py-2"><strong>Transaction Successfully</strong></h5>
						</div>
						@elseif($type=='no')
						<div class="col-lg-8 col-sm-12 mx-auto my-2" style="background-color:rgb(252,112,120); border-radius: 5px; ">
							<h5 class="text-center py-2"><strong>Transaction Not Successfully</strong></h5>
						</div>
						@endif
					</div>
					@endif

					<form method="post" action="{{route('plant-addTransaction',['id'=>$user['user_id']])}}">
						@csrf
						<div class="row">
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>ID <span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Search ID" name="toId" id="toId"  required="" list="userlist">
							    <datalist id="userlist">
									@foreach($to_list as $tl)
									     <option value="{{$tl['user_id']}}"></option>
									@endforeach
								</datalist>
							</div>
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>Name<span class="text-danger">*</span></label>
							    <input type="text" class="form-control" name="toName"  id="toName" required="" readonly="">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>Role<span class="text-danger">*</span></label>
							    <input type="text" class="form-control" name="toRole"  id="toRole" required="" readonly="">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Transaction Amount<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Transaction Amount" required=""  id="transactionAmount" pattern="[0-9]*" maxlength="10" name="transactionAmount">
							</div>
							<div class="col-lg-4 col-sm-10  my-2" id="vill_list">
							    <label>Transaction Type<span class="text-danger">*</span></label>
							    <select class="form-control" required="" id="transactionType" name="transactionType">
							    	<option value="">--* Select One *--</option>
							    	<option value="online">Online</option>
							    	<option value="cash">Cash</option>
							    	<option value="bank">Bank Acount</option>
							    </select>
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Transaction Message <span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Transaction Message" required=""  id="transactionMessage" name="transactionMessage" pattern="[a-zA-Z0-9\s]*" maxlength="100">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Transaction Photo</label>
							    <input type="file" class="form-control"   id="transactionPhoto" name="transactionPhoto">
							</div>
							<div class="col-lg-12  my-2">
    							<button type="submit" class="btn btn-primary mx-auto"   style="cursor: pointer;">Submit</button>
    						</div>
						</div>
					</form>
				</div>

				<div class="row">
					
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper Library-->
	<script src="{{ asset('/js/js/popper.min.js') }}"></script>
	<!-- Bootstrap Library-->
	<script src="{{ asset('/js/js/bootstrap.min.js') }}"></script>
	<!-- morris charts -->
	<script src="{{ asset('/js/js/custom-morris.js') }}"></script>
	<!-- yajra table CDN --> 
	<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<!-- Custom Script-->
	<script src="{{ asset('/js/js/custom.js') }}"></script>
	<script src="{{ asset('/js/js/farmer-dasbord.js') }}"></script>

	<script src="{{ asset('/js/js/dairy.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(event){
			$(document).on('change','#toId',function(event){
				 var toId=$('#toId').val();
				$.post('{{ route("plant-getUserData")}}',{'data':toId,'_token':$('input[name=_token]').val()},function(data){
						$('#toName').val(data['name']);
						$('#toRole').val(data['role']);

    			});

			})
			$('#msg_show').show();
			setTimeout(function(){$('#msg_show').hide();}, 5000);
		});
	</script>
</body>
</html>
