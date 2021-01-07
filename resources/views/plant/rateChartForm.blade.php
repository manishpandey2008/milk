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
					<h3 class="block-title"> New Rate Chart </h3>
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
								<h4 class="wiget-title">( <strong>Plant</strong> ) </h4>
								<p>{{$user['user_id']}}</p>
							</div>

						</div>
					</div>
				</div>

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					@if($error)
						<div class="row">
							<div class="col-12 my-3" style="background-color: rgb(230,100,20);">
								<p class="text-center my-2">{{$error}}</p>
							</div>
						</div>
					@endif
					<h3 class="text-center py-3"><strong>Rate Chart</strong></h3>
					
					<!-- <div style="width:100%;height: 2px;background-color: black"></div> -->
					<div class="row py-2">
						<div class="col-lg-6 col-sm-10 mx-auto">
							<select class="form-control" id="selectRate">
								<option value="kg">KG Rate</option>
								<option value="self">Self Rate</option>
							</select>
						</div>
					</div>
					<hr>
					<form method="post" action="{{route('formulacheck')}}" id="kgForm" hidden="">
						@csrf
						<div class="row">

							<div class="col-lg-4 col-sm-12 my-2">
								<label>Name Of Rate Chart<span class="text-danger">*</span></label>
								<input type="text" name="chartName" class="form-control" id="chartName" required="" placeholder="Enter Rate Chart Name">
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label> Market Rate Type<span class="text-danger">*</span></label>
								<select class="form-control" id="rateType" name="rateType" required="">
									<option value="">--* Select One Category*--</option>
									<option value="52/48">52/48 Type</option>
									<option value="60/40">60/40 Type</option>
									<option value="50/50">50/50 Type</option>
								</select>
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Market Rate Value<span class="text-danger">*</span></label>
								<input type="text" name="rateVal" class="form-control" id="rateVal" required="" placeholder="Enter Market Rate Value" readonly="">
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Fat<span class="text-danger">*</span></label>
								<input type="text" name="fatVal" class="form-control" id="fatVal" required="" readonly="">
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Snf<span class="text-danger">*</span></label>
								<input type="text" name="snfVal" class="form-control" id="snfVal" required="" readonly="" >
							</div>
							<div class="col-12 my-2">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>

				<form method="post" action="{{route('formulacheck')}}" id="selfForm">
						@csrf
						<div class="row">

							<div class="col-lg-4 col-sm-12 my-2">
								<label>Name Of Rate Chart<span class="text-danger">*</span></label>
								<input type="text" name="chartName" class="form-control" id="chartName" required="" placeholder="Enter Rate Chart Name">
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>	From FAT<span class="text-danger">*</span></label>
								<input type="text" name="fatVal" class="form-control" id="fatVal" required="" >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>To FAT<span class="text-danger">*</span></label>
								<input type="text" name="snfVal" class="form-control" id="snfVal" required=""  >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>	From SNF<span class="text-danger">*</span></label>
								<input type="text" name="fatVal" class="form-control" id="fatVal" required="" >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>To SNF<span class="text-danger">*</span></label>
								<input type="text" name="snfVal" class="form-control" id="snfVal" required=""  >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Starting Rate<span class="text-danger">*</span></label>
								<input type="text" name="snfVal" class="form-control" id="snfVal" required="" >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Starting FAT<span class="text-danger">*</span></label>
								<input type="text" name="fatVal" class="form-control" id="fatVal" required="">
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>Starting SNF<span class="text-danger">*</span></label>
								<input type="text" name="snfVal" class="form-control" id="snfVal" required="" >
							</div>
							<div class="col-lg-4 col-sm-12 my-2">
								<label>No Of Group<span class="text-danger">*</span></label>
								<select class="form-control" id="noOfGrp" name="noOfGrp" required="">
									<option value="">--* Select No Of Group*--</option>
									@for($i=1;$i<=10;$i++)
									<option value="{{$i}}">{{$i}}</option>
									@endfor
								</select>
							</div>
							<div class="row" id="fatGrp">
							</div>
							<div class="row" id="snfGrp">
							</div>
							<div class="col-12 my-2">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
					
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

	<div class="modal fade" tabindex="-1" role="dialog" id="notification">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div id="noti">
	      	
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div>
	
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
			$(document).on('change','#rateType',function(){
				$('#rateVal').val("");
				var rateType=$('#rateType').val();
				if (rateType) { $('#rateVal').removeAttr('readonly');}
				else{ $('#rateVal').attr('readonly','readonly');}
			});
			$(document).on('change','#rateVal',function(){
				var rateVal=$(this).val();
				var rateType=$('#rateType').val();
				if(rateVal){
					if (rateType=='52/48') {
						var fat=(rateVal*52)/ 650;
						var snf=(rateVal*48)/ 900;
					}else if (rateType=='60/40') {
						var fat =(rateVal*60)/650;
						var snf =rateVal*50/850 ;
					}else{
						var fat=(rateVal*50)/ 650;
						var snf=(rateVal*50)/ 850;
					}
					$('#fatVal').val(fat);
					$('#snfVal').val(snf);
				}
			});
			$(document).on('change','#selectRate',function(){
				var selectVal=$(this).val();
				if(selectVal=='kg'){
					$('#kgForm').show();
					$('#selfForm').hide();
				}else{
					$('#kgForm').hide();
					$('#selfForm').show();
				}
			});
			$(document).on('change','#noOfGrp',function(){
				var val=$(this).val();
				var html1="";
				var html2="";
				html1='<div class="col-12 my-2"><h4><strong>FAT Steps</strong></h4></div>';
				for (var i = 1;i<=val; i++) {
					html1+='<div class="col-lg-2 col-sm-6 my-2"><label>Fat Step <span class="text-danger">*</span></label><input type="text" name="fatStep[]" class="form-control" required=""></div><div class="col-lg-2 col-sm-6 my-2"><label>Add Rate Fat 1<span class="text-danger">*</span></label><input type="text" name="addRatF[]" class="form-control" id="fatVal" required="" ></div>';
				}
				$('#fatGrp').html(html1);
				html2='<div class="col-12 my-2"><h4><strong>SNF Steps</strong></h4></div>';
				for (var i = 1;i<=val; i++) {
					html2+='<div class="col-lg-2 col-sm-6 my-2"><label>Snf Step <span class="text-danger">*</span></label><input type="text" name="snfStep[]" class="form-control" required=""></div><div class="col-lg-2 col-sm-6 my-2"><label>Add Rate Snf 1<span class="text-danger">*</span></label><input type="text" name="addRatF" class="form-control"  required="" ></div>';
				}
				$('#snfGrp').html(html2);
			});
		});
	</script>
	
</body>
</html>
