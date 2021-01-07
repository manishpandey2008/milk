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
				@foreach($users as $user)
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
@foreach($users as $user)
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
					<h3 class="block-title">Registration</h3>
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
								<h3 class="wiget-title">{{$user['first_name']}}</h3>
								<h4 class="wiget-title">( <strong>{{$user['working_role']}}</strong> ) </h4>
								<p>{{$user['phone_number']}}</p>
							</div>
						</div>
					</div>
				</div>
@endforeach
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					
				<h3 class="text-center"><u>{{$create_role}} Registration Form</u></h3>
					<form method="post" action="{{route('otpverification',['create_role'=>$create_role])}}" onsubmit="return checkPassword(this)" enctype="multipart/form-data">
						@csrf
						<div class="row">
			               <div class="col-lg-4 col-sm-12  my-2">
			                  <label>Working Role<span class="text-danger">*</span></label>
			                    <input type="text" class="form-control" value="{{$create_role}}" readonly="" name="role">
			                </div>
    						<div class="col-lg-4 col-sm-10  my-2">
    							<label>First Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter " required="" id="first_name" name="first_name" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" maxlength="30">
    						</div>
    						<div class="col-lg-4 col-sm-10  my-2">
    							<label>Mid Name</label>
                                <input type="text" class="form-control" placeholder="Enter " id="mid_name" name="mid_name" pattern="[a-zA-Z\s]*" title="Max Length Of String is 30" maxlength="30">
    						</div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control"placeholder="Enter " required="" id="last_name" name="last_name" pattern="[A-Za-z]*" title="Max Length Of String is 30" maxlength="30">
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                
                                <label>Mobile Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone_number" placeholder="Enter " required="" name="phone_number" pattern="[0-9]{10}" title="Enter 10 digit of mobile number">
                                @if($error)
                                	<p class="text-danger">{{$error}}</p>
                                @endif
                                
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Email Id</label>
                                <input type="text" class="form-control" placeholder="Enter " name="email" id="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                <p id="email_validation"></p>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Enter " name="password" id="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                              
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Re-Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Enter " name="re_password" id="re_password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                              
                                 <p id="wrong_pass" class="text-danger" style="display: none">Password Not Match</p>
                                 <p id="match_pass" class="text-success" style="display: none">Paaword Match</p>
                            </div>
                            <div class="col-lg-4 col-sm-10  my-2">
                                <label>Photo <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="photo" required="">
                            </div>
                            <div class="col-12 my-2">
                                <p><input type="checkbox" name="condition" id="tandc" value="false"> terms and conditions</p>
                            </div>
    						<div class="col-lg-12  my-2">
    							<button class="btn btn-primary mx-auto"  id="resiter_btn" name="register" style="cursor: pointer;">Register </button>
    						</div>
    					</div>
					</form>
			
				</div>
				<div class="container-fluid widget-area proclinic-box-shadow color-green my-3">
					
				</div>
				@foreach($users as $user)
				<div class="container-fluid my-3 widget-area ">
					<div class="row footer">
						<div class="col-12 text-center my-5">
							<h5><span class="ti-comments"></span> Need Help</h5>
							<h6><strong>Supper Admin( {{$user['creater_user_id']}} )</strong></h6>
							<h6><span class="ti-mobile"></span> 9798316421</h6>
							<h6><span class="ti-email"></span> smpandey.2008@gmail.com</h6>
						</div>	
					</div>
				</div>
				@endforeach
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
	<!-- <script src="{{ asset('/js/js/dairy.js') }}"></script> -->
	<script type="text/javascript">
		
		$("#re_password").on('keyup',function(){
               var pass=$('#password').val();
               var re_pass=$('#re_password').val();

                  
               if(pass!=re_pass){
                   $('#match_pass').hide();
                   $('#wrong_pass').show();
               }
               else{
                   $('#wrong_pass').hide();
                   $('#match_pass').show();
               }

            });
function checkPassword(form){
   var password1 = form.password.value; 
   var password2 = form.re_password.value; 

   if(password1!=password2){
    alert ("\nPassword did not match: Please try again...") 
    return false; 
   }
   else{
    return true;
   }


}
	</script>
</body>
</html>
