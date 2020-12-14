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
				<li >
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
					<h3 class="block-title"> Farmer >> Create Farmer</h3>
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
					<h3 class="text-center py-3">Farmer Details Form</h3>
					<form method="post" action="{{route('society.senddetails',['role'=>$role])}}">
						@csrf
						<div class="row">
			               <div class="col-lg-4 col-sm-12  my-2">
			                  <label>User ID<span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" value="{{$create_user_id}}" readonly="" name="role">
			                </div>
    						<div class="col-lg-4 col-sm-10  my-2">
    							<label>Plant ID<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{$plant_id}}" id="plant_id" readonly="" name="plantId">
    						</div>
    						<div class="col-lg-4 col-sm-10  my-2">
                                <label>BMC ID</label>
                                <input type="text" class="form-control" value="{{$bmc_id}}" id="bmc_id" readonly="">
                            </div>
    						<div class="col-lg-4 col-sm-10  my-2">
    							<label>Society ID<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{$user_id}}" id="user_id" readonly="" name="societyId">
    						</div>
    						<div class="col-lg-4 col-sm-10  my-2">
                                <label>Chart Category<span class="text-danger">*</span></label>
                                <select class="form-control" required="" name="chartCategory">
                                	<option value="">--* Select One *--</option>
                                	<option value="a">A</option>
                                	<option value="b">B</option>
                                	<option value="c">C</option>
                                </select>
                            </div>
                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Personal Information</u></h5>
                            </div>
                          
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Name in Hindi </label>
                                <input type="text" class="form-control"  placeholder="Enter Name in Hindi" name="nameInHindi">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">    
                                <label>Father Name in English <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  placeholder="Enter Father Name" required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="fatherName" maxlength="30" >
                            </div>
                             <div class="col-lg-4 col-sm-10  my-2">
                                <label>Father Name in Hindi</label>
                                <input type="text" class="form-control"  placeholder="Enter Father Name In Hindi"  pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="fatherNameInHindi" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2" id="vill_list">
                                <label>Village Name<span class="text-danger">*</span></label>
                                <select class="form-control" required="" name="villageName" id="vill_name">
                                	<option value="">--* Select One *--</option>
                                	@foreach($village_list as $vl)
                                	<option value="{{$vl}}">{{$vl}}</option>
                                	@endforeach
                                	<option value="none">Not In List</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2" id="new_vill" style="display: none">
                                <label>New Village Name</label>
                                <input type="text" class="form-control" placeholder="Enter New Village Name" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" name="newVillageName" maxlength="50">
                                <p id="email_validation"></p>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Full Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Full Address"  required="" pattern="[a-zA-Z0-9\s]*" title="Max Length Of String is 100" name="fullAddress" maxlength="100">
                              
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Pin Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Pin Code "   required="" name="pinCode" pattern="[0-9]{6}" title="Pin Code length is 6">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Gender<span class="text-danger">*</span></label>
                                <select class="form-control" required="" name="gender">
                                	<option value="">--* Select One *--</option>
                                	<option value="male">Male</option>
                                	<option value="female">Female</option>
                                	<option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Date Of Birth<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" placeholder="Select Date Of Birth "  required="" name="dob">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Anniversary Date</label>
                                <input type="date" class="form-control" placeholder="Select Anniversary Date"   name="anniversaryDate">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Emergency Contact Number</label>
                                <input type="text" class="form-control" placeholder="Enter Emergency Contact Number"  name="emergencyContactNumber" pattern="[0-9]{10}" title="Enter Only 10 Numeric Val">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Blood Group</label>
                                <input type="text" class="form-control" placeholder="Enter Blood Group"   name="bloodGroup">
                            </div>

                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Type Of Opening Balance<span class="text-danger">*</span></label>
                                <select class="form-control" required="" name="openingBalanceType">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Credit</option>
                                	<option value="debit">Debit</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Opening Amount<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Opening Amount"  required="" min="0" pattern="[0-9]*" title="Enter Only Numeric Val" name="openingAmount" maxlength="10">
                            </div>

                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Bank Detail And Documents</u></h5>
                            </div>

                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Payee Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Payee Name" required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="payeeName" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Bank Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank Name"  required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" name="bankName" maxlength="50">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Acount Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Acount Number"   name="actNumber" required="" pattern="[0-9]*" title="Enter only numeric val" maxlength="20">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>IFSC Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank IFSC Code"  required=""  name="ifscNumber" pattern="[a-zA-Z0-9]*" title="Max Length Of String is 30" maxlength="20">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Aadhar Number"  required="" name="aadharNumber" pattern="[0-9]{12}" title=" Length Of Aadhar is 12">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Document (PDF)<span class="text-danger">*</span></label>
                                <input type="file" class="form-control"  required="" name="aadharDoc">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Photo<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" placeholder="Enter Bank IFSC Code"  required="" name="photo">
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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="{{ asset('/js/js/dairy.js') }}"></script>
</body>
</html>
