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
				<li>
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-home"></span> Home
					</a>
					<ul class="collapse list-unstyled " id="nav-dashboard">
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Current Reports</a>
						</li>
						<li>
							<a href="{{ route('farmer.alldata',['plantId'=>$plant_id,'id'=>$user_id])}}">Total Milk Report</a>
						</li>
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Milk Notifiction</a>
						</li> 
					</ul>
				</li>
				<li >
					<a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-inr"></span> Transaction
					</a>
					<ul class="collapse list-unstyled " id="nav-patients">
						<li>
							<a href="{{ route('farmer.transition',['plantId'=>$plant_id,'id'=>$user_id])}}">All Payment</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#shop" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-shopping-cart"></span> Shope
					</a>
					<ul class="collapse list-unstyled " id="shop">
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Shoping</a>
						</li>
						<li>
							<a href="{{ route('farmer.home',['id'=>$user_id])}}">Order List</a>
						</li>
					</ul>
				</li>
				<li class="active">
					<a href="#nav-doctors" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled show" id="nav-doctors">
						<li>
							<a href="{{ route('farmer.profile',['plantId'=>$plant_id,'id'=>$user_id])}}">Profile</a>
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
								<span class="fa fa-user" id="sidebarCollapse"></span>
							</a>
					
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>
									
									{{$fp['first_name']." ".$fp['mid_name']." ".$fp['last_name']}}
								
								</h5>
									<a href="{{route('plant.logout',['id'=>$user_id])}}"><span class="ti-power-off"></span> Logout </a>
										<br>
									<a href="{{ route('farmer.profile',['plantId'=>$plant_id,'id'=>$user_id])}}"><span class="ti-power-off"></span> Profile </a>
									
							</div>
							
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-12">
					<h3 class="block-title text-center">Profile</h3>
				</div>
				
			</div>

			<div class="container-fluid home">
				<div class="widget-area proclinic-box-shadow  my-3">
					<div class="row">
						<div class="col-lg-4 col-sm-12 mx-auto">
							<div class="img-div my-5 text-center">
								<img src="{{ asset('/storage/image/user.jpg') }}">
								<p><span id="name">{{$fp['first_name'].' '.$fp['mid_name'].' '.$fp['last_name']}}</span><br>( Farmer )<br><strong>{{$user_id}}</strong><br>{{$fp['phone_number']}}</p>
							</div>
							<div class="profile-main">
								
							</div>
						</div>
						<div class="col-lg-6 col-sm-10 mx-auto">
							<div class="">
								<div class="all-profile my-5" style="width: 100%">
									<h5 class=" mb-2 mx-3"><strong>Profile</strong></h5>
									<div class="devision_line"></div>
									<table class="mt-3 table">
										<tbody>
										<tr>
											<td class="col"><strong> Working Role </strong></td>
											<td class=" col">:</td>
											<td class="col">{{$fp['working_role']}}</td>
										</tr>
										<tr>
											<td class="col"><strong> Father Name </strong></td>
											<td class="col">:</td>
											<td id="f_name" class="col">{{$fp['father_name_eng']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Plant Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['plant_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>BMC Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['bmc_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Socity Id</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['society_id']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Email</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['email']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Route No</strong></td>
											<td class="col">:</td>
											<td class="col">1</td>
										</tr>
										<tr >
											<td class="col"><strong>Village</strong></td>
											<td class="col">:</td>
											<td class="col">{{$fp['village_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Full Add</strong></td>
											<td class="col">:</td>
											<td id="add" class="col">{{$fp['address']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>PIN Code</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['pin_code']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Emergency Number</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['emergency_contact_number']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bood Group</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['bood_group']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Anniversary Date</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">{{$fp['anniversary_date']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Payee Name</strong></td>
											<td class="col">:</td>
											<td id="payee_name" class="col">{{$fp['payee_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Name</strong></td>
											<td class="col">:</td>
											<td id="bank_name" class="col">{{$fp['bank_name']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Acount No</strong></td>
											<td class="col">:</td>
											<td id="ac_no" class="col">{{$fp['account_number']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank IFSC No</strong></td>
											<td class="col">:</td>
											<td id="ifsc_no" class="col">{{$fp['ifsc_code']}}</td>
										</tr>
										<tr >
											<td class="col"><strong>Aadhar No.</strong></td>
											<td class="col">:</td>
											<td id="ifsc_no" class="col">{{$fp['aadhar_number']}}</td>
										</tr>
										</tbody>
									</table>
									
								</div>
								<div class="edit_btn my-5">
									<button class="btn btn-primary" data-toggle="modal" data-target="#editModel" id="edit">Edit Profile</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="model">
					<div class="modal fade" id="editModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
					      </div>
					      <div class="modal-body">
					      	<button class="btn btn-primary">Request Button</button>
					        <!-- <form>
					        	<div class="form-group">
					        	    <label >Name</label>
					        	    <input type="text" class="form-control" id="edit_name" name="edit_name">
					        	</div>
					        	<div class="form-group">
					        	    <label >Father Name</label>
					        	    <input type="text" class="form-control" id="edit_fname" name="edit_fname">
					        	</div>
					        	<div class="form-group">
					        	    <label >Add</label>
					        	    <input type="text" class="form-control" id="edit_add" name="edit_add">
					        	</div>
					        	<div class="form-group">
					        	    <label >Pin Code</label>
					        	    <input type="text" class="form-control" id="edit_pin" name="edit_pin">
					        	</div>
					        	<div class="form-group">
					        	    <label >Payee Name</label>
					        	    <input type="text" class="form-control" id="edit_p_name" name="edit_p_name">
					        	</div>
					        	<div class="form-group">
					        	    <label >Bank Name</label>
					        	    <input type="text" class="form-control" id="edit_bank" name="edit_bank">
					        	</div>
					        	<div class="form-group">
					        	    <label >Acount Number</label>
					        	    <input type="text" class="form-control" id="edit_ac_number" name="edit_ac_number">
					        	</div>
					        	<div class="form-group">
					        	    <label >IFSC No</label>
					        	    <input type="text" class="form-control" id="edit_ifsc" name="edit_ifsc">
					        	</div>
					        </form> -->
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
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
