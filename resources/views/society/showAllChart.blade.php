<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chart</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="../image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="../css/red.css" id="style_theme">
	<link rel="stylesheet" href="../css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="../charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="../css/jquery-jvectormap.css">

	<script src="../js/modernizr.min.js"></script>
	
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
							<a href="{{route('society.home',['id'=>$user['user_id']])}}">Home</a>
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
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>Manish Pandey</h5>
									<span class="ti-power-off"></span> Logout</a>
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
					<h3 class="block-title">Rate Chart >> All Chart</h3>
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
					<h3 class="text-center"><u>Rate Chart</u></h3>
					<div class="row">
						<div class="col-lg-6 col-sm-12 mx-auto">
							<div class="row">
								<div class="col-6 my-2">
									<select class="form-control">
										<option value="">--* Select One *--</option>
										<option value="">A</option>
										<option value="">A</option>
										<option value="">A</option>
										<option value="">A</option>
										<option value="">A</option>
									</select>
								</div>
								<div class="col-6 my-2">
									<button class="btn btn-primary">Show Chart</button>
								</div>
							</div>
						</div>
					</div>
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div class="row">
						<div class="col-12 mx-auto">
							<p class="text-center"><u>A-Cortege Chart</u><br>(S : 30 AND F: 40 )<br>Uploading Date :20/10/1997 </p>
						</div>
						<div class="table-responsive">
							<table class="table text-center table-bordered table-hover table-striped">
								<thead>
									<tr>
									     <th scope="col">S/F</th>
									     <th scope="col">4</th>
									     <th scope="col">4.5</th>
									     <th scope="col">5</th>
									     <th scope="col">5.5</th>
									     <th scope="col">6</th>
									     <th scope="col">6.5</th>
									     <th scope="col">7</th>
									     <th scope="col">7.5</th>
									     <th scope="col">8</th>
									     <th scope="col">8.5</th>
									     <th scope="col">9</th>
									     <th scope="col">9.5</th>
									     <th scope="col">10</th>
									     <th scope="col">10.5</th>
									     <th scope="col">11</th>
									     <th scope="col">11.5</th>
									     <th scope="col">12</th>
									     <th scope="col">12.5</th>
									     <th scope="col">13</th>
									   </tr>
								</thead>
								<tbody>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
									<tr>
										<th>1</th>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
										<td>2.3</td>
									</tr>
								</tbody>
							</table>

							<!-- <a class="btn btn-primary">Update New</a> -->
						</div>
					</div>

					<div>
						
					</div>
					
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
	<script src="../js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="../js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="../js/bootstrap.min.js"></script>
	<!-- morris charts -->
	<script src="../charts/js/raphael-min.js"></script>
	<script src="../charts/js/morris.min.js"></script>
	<script src="../js/custom-morris.js"></script>

	<!-- Custom Script-->
	<script src="../js/custom.js"></script>
	<script src="../js/farmer-dasbord.js"></script>
</body>
</html>
