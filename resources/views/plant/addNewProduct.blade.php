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
				<li class="active">
					<a href="#home" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled show" id="home">
						<li>
							<a href="{{route('plant.home')}}">Home</a>
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
							<a href="{{route('plant.milk.collection.table')}}">Milk Collection List</a>
						</li>
						<li>
							<a href="{{route('plant.milk.collection')}}">Milk Collection Notification</a>
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
							<a href="{{route('memberlist')}}">All Members</a>
						</li>
						<li>						<li>
							<a href="{{route('registration',['create_role'=>'society'])}}">Create Society</a>
						</li>
						<li>
							<a href="{{route('registration',['create_role'=>'farmer'])}}">Create Farmer</a>
						</li>
						<li>
							<a href="{{route('registration',['create_role'=>'staff'])}}">Create Staff</a>
						</li>
						<li>
							<a href="{{route('registration',['create_role'=>'outlet'])}}">Create Outlet</a>
						</li>
						<li>
							<a href="{{route('privatevehicle',['create_role'=>'privetvehicle'])}}">Private Vehicle</a>
						</li>
						<li>
							<a href="{{route('registration',['create_role'=>'vehicle_owner'])}}">Public Vehicle</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#root-master" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-road"></span> Root Master
					</a>
					<ul class="collapse list-unstyled " id="root-master">
						<li>
							<a href="{{route('rootmasterlist')}}">Root Master List</a>
						</li>
						<li>
							<a href="{{route('newrootmasterform')}}">Add New Root Master</a>
						</li>
					</ul>
				</li>
				
				<li >
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled " id="rate-chart">
						<li>
							<a href="{{route('ratechartlist')}}">Current Reat Chart List</a>
						</li>
						<li>
							<a href="{{route('newratechartform')}}">Create New Reat Chart</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
						<li>
							<a href="{{route('plant-allTransaction')}}">All Transition List</a>
						</li>
						<li>
							<a href="{{route('plant-newTransaction')}}">New Transition</a>
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
							<a href="{{route('plant.listofproduct')}}">All Product List</a>
						</li>
						<li>
							<a href="{{route('plant.addproduct')}}">Add New Product </a>
						</li>
						<!-- <li>
							<a href="#">Offer Controller</a>
						</li>
						<li>
							<a href="#">Page Controller</a>
						</li> -->
						<li>
							<a href="{{route('plant.allOrderList')}}">Order List</a>
						</li>
						<li>
							<a href="{{route('plant.neworderlist')}}">New Order List</a>
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
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="fa fa-sign-out"></span> Logout </a>
										<br>
									<a href="{{route('plant.logout',['id'=>$user['user_id']])}}"><span class="fa fa-user"></span> Profile </a>
									
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
					<h3 class="block-title">Add Product</h3>
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
					<h4 class="text-center py-3"><strong>Add New Product</strong></h4>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					@if(session('msg'))
					<div class="row">
						<div class="col-lg-8 col-sm-12 mx-auto my-2" style="background-color:rgb(255,187,119); border-radius: 10px; " id="add_data">
							<h5 class="text-center py-2">{{session('msg')}}<strong></strong></h5>
						</div>
					</div>
					@endif
					<form method="post" action="{{route('addproduct')}}" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>Product Name<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Name" name="productName" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" required="" maxlength="50">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>Product Short Name<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Short Name" name="shortProductName" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" required="" max="30">
							</div>
							<div class="col-lg-4 col-sm-10  my-2" id="vill_list">
							    <label>Product Type<span class="text-danger">*</span></label>
							    <select class="form-control" required="" name="productType">
							    	<option value="">--* Select One *--</option>
							    	<option value="milky">Milky</option>
							    	<option value="cattle">Cattle</option>
							    	<option value="other">Other</option>
							    </select>
							</div>
							<div class="col-lg-4 col-sm-10  my-2" id="vill_list">
							    <label>Product Unit<span class="text-danger">*</span></label>
							    <select class="form-control" required="" name="productUnit">
							    	<option value="">--* Select One *--</option>
							    	<option value="kg">Kg</option>
							    	<option value="litter">Litter</option>
							    	<option value="number">Number</option>
							    	<option value="other">Other</option>
							    </select>
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Amount<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Amount" required=""  name="productAmount" pattern="[0-9]*" maxlength="10">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Price (Per Unit)<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Price" required=""  name="productPrice" pattern="[0-9]*" maxlength="10">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Offer (%)</label>
							    <input type="text" class="form-control"  placeholder="Enter Product Offer"  name="productOffer" pattern="[0-9]*" maxlength="10">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Photo</label>
							    <input type="file" class="form-control"   name="productPhoto" min="0" required="">
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
		$('#add_data').show();
		setTimeout(function(){$('#add_data').hide();}, 5000);
	</script>
</body>
</html>
