
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
				<li class="active">
					<a href="#farmer-dasbord" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-users"></span> Members
					</a>
					<ul class="collapse list-unstyled show" id="farmer-dasbord">
						
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
						<li>
							<a href="#">Offer Controller</a>
						</li>
						<li>
							<a href="#">Page Controller</a>
						</li>
						<li>
							<a href="#">Order List</a>
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
			
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Add Public Vehicle </h3>
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
								<h2 class="wiget-title"> <strong>PUBLIC VEHICLE</strong>  </h2>
								<p>{{$create_user_id}}</p>
								
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
					<h3 class="text-center py-3">Vehicle Details Form</h3>
					<form method="post" action="{{route('senddetails',['role'=>$role])}}">
						@csrf
						<div class="row">
							<div class="col-lg-4 col-sm-10  my-2">
                                 <label>Vehicle Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="vehicleType" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="tanker">Tanker</option>
                                	<option value="pickup">Pickup</option>
                                	<option value="none">Others</option>
                                </select>
                            </div>
			               <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Vehicle No.<span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" required="" name="vehicleNumber" placeholder="Enter Vehicle Number" pattern="[a-zA-Z0-9\s]*" maxlength="20">
			                </div>
    						
    						<div class="col-lg-4 col-sm-10  my-2">
    							<label>Driver</label>
                                <select class="form-control" required="" name="driver">
                                	<option value="">--* Select One *--</option>
                                	@foreach($drivere_list as $dl)
                                	<option value="$dl">{{$dl}}</option>
                                	@endforeach
                                </select>
    						</div>
    						
                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Owner Information</u></h5>
                            </div>
                          
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Owner Name (Hindi)</label>
                                <input type="text" class="form-control"  placeholder="Enter Owner Name In Hindi" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="ownerNameInHindi" maxlength="30">
                            </div>
                             <div class="col-lg-4 col-sm-10  my-2">
                                <label>Emergency Mobile No.:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Emergency Mobile no. "  required="" name="emergencyNo" pattern="[0-9]{10}" title="Max Length Of Numeric is 10">
                            </div>
                            
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Full Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Full Address"  required="" pattern="[a-zA-Z0-9\s]" title="Max Length Of String is 100" name="address" maxlength="100">
                              
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Pin Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Pin Code "  required="" name="pinCode" pattern="[0-9]{6}" title="Max Length Of Numeric is 6">
                            </div>
                            

                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Bank Detail And Documents</u></h5>
                            </div>

                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Payee Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Payee Name" required="" pattern="[a-zA-Z\s]" title="Max Length Of String is 30" name="payeeName" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Bank Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank Name"  required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" name="bankName" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Acount Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Acount Number"  required="" pattern="[0-9]*" title="Enter only numeric val" name="actNumber" maxlength="20">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>IFSC Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank IFSC Code"  required="" pattern="[a-zA-Z0-9]" title="Max Length Of String is 30" name="ifscNumber" maxlength="20">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Acount Number"  required="" pattern="[0-9]{12}" title="Enter only numeric length 12" name="aadharNumber">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Document PDF<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" placeholder="Enter Bank IFSC Code"  required="" name="aadharDoc">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Photo<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" placeholder="Enter Bank IFSC Code"  required="">
                            </div>
                            
                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Vehicle Documents</u></h5>
                            </div>
                            @if($error)
								
									<div class="col-12 my-3" style="background-color: rgb(230,100,20);">
										<p class="text-center my-2">{{$error}}</p>
									</div>
							
							@endif
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>RC Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="" name="rcNumber" placeholder="Enter RC Number" pattern="[a-zA-Z0-9\s]*" maxlength="20">
                            </div>
                             <div class="col-lg-4 col-sm-10  my-2">
                                <label>Vehicle RC Document<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" required="" name="rcDoc">
                            </div>
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Expiry date of RC<span class="text-danger">*</span></label>
			                    <input type="date" class="form-control" required="" name="expiryRc" placeholder="Enter Rc Expiry Date">
			                </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>Vehicle Insurance Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Insurance Certificate Number"  required="" name="insuranceNumber" pattern="[a-zA-Z0-9\s]*" maxlength="20">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Vehicle Insurance Document<span class="text-danger">*</span></label>
                                <input type="file" class="form-control"   required="" name="insuranceDoc">
                            </div>
                            
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Expiry date of Insurance Certificate<span class="text-danger">*</span></label>
			                    <input type="date" class="form-control" required="" name="expiryInsuranceDate">
			                </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>Pollution Certificate Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Pollution Certificate Number"  required="" name="pollutionNo" pattern="[a-zA-Z0-9\s]*" maxlength="20">
                            </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>Pollution Certificate Document<span class="text-danger">*</span></label>
                                <input type="file" class="form-control"  required="" name="pollutionDoc">
                            </div>
                            
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Expiry date of Pollution Certificate<span class="text-danger">*</span></label>
			                    <input type="date" class="form-control" required="" name="expiryPollutionDate">
			                </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>Fitness Certificate Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Fitness Certificate Number"  required="" name="fitnessNumber" pattern="[a-zA-Z0-9\s]*" maxlength="20">
                            </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>Fitness Certificate<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" placeholder="Upload Fitness Certificate image or pdf"  required="" name="fitnessDoc">
                            </div>
                            
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Expiry date of Fitness Certificate<span class="text-danger">*</span></label>
			                    <input type="date" class="form-control" required="" name="expiryFitness">
			                </div>
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Vehicle Photo<span class="text-danger">*</span></label>
			                    <input type="file" class="form-control" required="" name="vehiclePhoto">
			                </div>

    						<div class="col-lg-12  my-2">
    							<button class="btn btn-primary mx-auto"  id="resiter_btn" name="register" style="cursor: pointer;">Submit </button>
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
</body>
</html>
