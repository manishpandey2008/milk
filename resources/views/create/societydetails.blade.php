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
					<h3 class="block-title">Add Society </h3>
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
								
								<h2 class="wiget-title"><strong>SOCIETY</strong>  </h2>
								<p>{{$create_user_id}}</p>
								
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h3 class="text-center py-3">{{$role}} Details Form</h3>
					<form method="post" action="{{route('senddetails',['role'=>$role])}}" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-4 col-sm-12  my-2">
			                  <label>Plant ID <span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" value="{{$user_id}}" readonly="" name="plant_id">
			                </div>
			                <div class="col-lg-4 col-sm-10  my-2">
                                <label>BMC ID<span class="text-danger">*</span></label>
                                <select class="form-control" name="bmc_id" required="">
                                	<option value="">--* Select One *--</option>
                                	@foreach($users as $user)
                                	@if($user['working_role']=='bmc')
                                	<option value="{{$user['user_id']}}">{{$user['user_id']}}</option>
                                	@endif
                                	@endforeach
                                	<option value="none">Not Attatch With BMC</option>
                                </select>
                            </div>
							
			               <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Society ID<span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" value="{{$create_user_id}}" readonly="" name="society_id" >
			                </div>
			                <div class="col-lg-4 col-sm-12  my-2">
			                  	<label>Vehicle ID<span class="text-danger">*</span></label>
			                   	<select class="form-control" name="vehicle_id" required="">
                                	<option value="">--* Select One *--</option>
                                	@foreach($vehicle_id as $vi)
                                	<option value="{{$vi}}">{{$vi}}</option>
                                
                                	@endforeach
                                </select>
			                </div>
    						
    						<div class="col-lg-4 col-sm-10  my-2">
                                <label>Society System Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="society_system_type" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="sepratesociety">Seprate Society </option>
                                	<option value="attachedsociety">Attached Society </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Society Name<span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" placeholder="Enter Society Name"   name="society_name" required="" pattern="[a-zA-Z\s]*" maxlength="30">
			                </div>

                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Personal Information</u></h5>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Name in Hindi</label>
                                <input type="text" class="form-control"  id="name" name="name_in_hindi" >
                            </div>
                          	
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Father Name In English <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  placeholder="Enter Father Name" required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="father_name" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                
                                <label>Father Name In Hindi</label>
                                <input type="text" class="form-control"  placeholder="Enter Father Name In Hindi"   name="father_name_hindi">
                                
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2" id="vill_list">
                                <label>Village Name<span class="text-danger">*</span></label>
                                <select class="form-control" name="village" id="vill_name" required="">
                                	<option value="">--* Select One *--</option>
                                	@foreach($village_list as $vl)
                                	
                                	<option value="{{$user['user_id']}}">{{$vl}}</option>
                              
                                	@endforeach
                                	<option value="0">Not In List</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2" id="new_vill" style="display: none">
                                <label>New Village Name</label>
                                <input type="text" class="form-control" placeholder="Enter New Village Name" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" name="new_village" maxlength="50">
                             
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Full Address<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Full Address"  required="" pattern="[a-zA-Z0-9\s]*" title="Max Length Of String is 100" name="full_address" maxlength="50">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Pin Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Pin Code "  required="" pattern="[0-9]{6}" name="pin_code">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Gender<span class="text-danger">*</span></label>
                                <select class="form-control" name="gender_name" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="male">Male</option>
                                	<option value="female">Female</option>
                                	<option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Date Of Birth<span class="text-danger">*</span></label>
                                <input type="date" class="form-control"  required="" name="dob">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Anniversary Date</label>
                                <input type="date" class="form-control"  name="anniversaryDate">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Emergency Contact Number</label>
                                <input type="text" class="form-control"  name="emergencyContactNumber"  placeholder="Enter Emergency Contact Number" pattern="[0-9]{10}" title="Enter Only 10 Numeric Val">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Blood Group</label>
                                <input type="text" class="form-control"  name="bloodGroup" placeholder="Enter Blood Group">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Type Of Opening Balance<span class="text-danger">*</span></label>
                                <select class="form-control" name="open_bal_type" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Credit</option>
                                	<option value="debit">Debit</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Opening Amount<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Opening Amount"  required="" min="0" pattern="[0-9]*" title="Enter Only Numeric Val" name="opening_amount" maxlength="10">
                            </div>

                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Bank Detail And Documents</u></h5>
                            </div>

                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Payee Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Payee Name" required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" name="payee_name" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Bank Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank Name"  required="" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" name="bank_name" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Acount Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Acount Number"  required="" pattern="[0-9]*" title="Enter only numeric val" name="act_name" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>IFSC Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Bank IFSC Code"  required="" pattern="[a-zA-Z0-9]*" title="Max Length Of String is 30" name="ifsc_code">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Aadhar Number"  required="" pattern="[0-9]{12}" title="Length Of numeric is 12" name="aadhar_number">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Aadhar Document (PDF OR Photo)<span class="text-danger">*</span></label>
                                <input type="file" class="form-control"   id="" name="aadhar_doc" required="" maxlength="30">
                            </div>
                            <div class="col-12  my-2">
                                  <h5 class="my-3"><u>Society Details </u></h5>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Select Society Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="society_type" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Self Dependent </option>
                                	<option value="debit">Dependent </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Issue Payment Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_type" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Bank Account Payment </option>
                                	<option value="credit">Bank Account Payment & Cash </option>
                                	<option value="debit">Cash </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Root Supervisior  <span class="text-danger">*</span></label>
                                <select class="form-control" name="supervisior" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Supervisior 1 </option>
                                	<option value="credit">Supervisior 2</option>
                                	<option value="debit">Supervisior </option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Select Commission Type <span class="text-danger">*</span></label>
                                <select class="form-control" name="commission_type" required="">
                                	<option value="">--* Select One *--</option>
                                	<option value="credit">Percentage On Money  </option>
                                	<option value="debit">Litter Basis  </option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Enter Commission Value <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Enter Commission Value" required="" pattern="[0-9]*" title="Max Length Of numeric is 30" name="commission_val" maxlength="10">
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
