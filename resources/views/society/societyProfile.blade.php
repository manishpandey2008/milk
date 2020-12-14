<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Society Profile</title>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
				<li >
					<a href="#home" data-toggle="collapse" aria-expanded="false">
						<span class="ti-home"></span> Home
					</a>
					<ul class="collapse list-unstyled " id="home">
						<li>
							<a href="societryHome.html">Home</a>
						</li>
						<li>
							<a href="dailyReport.html">Daily</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#farmer-dasbord" data-toggle="collapse" aria-expanded="false">
						<span class="ti-money"></span> Farmer
					</a>
					<ul class="collapse list-unstyled " id="farmer-dasbord">
						<li>
							<a href="farmerList.html">All Farmers</a>
						</li>
						<li>
							<a href="../registrationForm.html">Create Framer</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="false">
						<span class="ti-view-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled " id="rate-chart">
						<li>
							<a href="showAllChart.html">Show All Chart</a>
						</li>
						<li>
							<a href="#">Add New Category</a>
						</li>
						<!-- <li>
							<a href="#">Chart Management</a>
						</li>
						<li>
							<a href="#">Other</a>
						</li> -->
					</ul>
				</li>
				
				<li>
					<a href="#milk-management" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled " id="milk-management">
						<li>
							<a href="milkCollectionTable.html">Milk Collection Data</a>
						</li>
						<li>
							<a href="newMilkCollection.html">Add New Collection</a>
						</li>
						<li>
							<a href="milkSellTable.html">Milk Dispatch Data</a>
						</li>
						<li>
							<a href="milkSell.html">Milk Dispatch</a>
						</li>
					</ul>
				</li>

				<li >
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Account Management
					</a>
					<ul class="collapse list-unstyled " id="payment-management">
						<li>
							<a href="transitionTable.html">All Transition Data</a>
						</li>
						<li>
							<a href="newTransition.html">New Transition</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#vehicle" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Vehicle
					</a>
					<ul class="collapse list-unstyled" id="vehicle">
						<!-- <li>
							<a href="#">Receiving Receipt</a>
						</li>
						<li>
							<a href="#">Dispatch Receipt</a>
						</li> -->
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
						<span class="ti-user"></span> Plant
					</a>
					<ul class="collapse list-unstyled" id="plant">
						<li>
							<a href="plantOrderList.html">All Old Orders</a>
						</li>
						<li>
							<a href="newOrder.html">New Order</a>
						</li>
					</ul>
				</li>
				<li class="active">
					<a href="#profile" data-toggle="collapse" aria-expanded="true">
						<span class="ti-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled show" id="profile">
						<li>
							<a href="societyProfile.html">Profile</a>
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
								<a class="dropdown-item" href="#">
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
				<div class="col-md-12">
					<h3 class="block-title text-center">Profile</h3>
				</div>
				
			</div>

			<div class="container-fluid home">

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

				<div class="widget-area proclinic-box-shadow  my-3">
					<div class="row">
						<div class="col-lg-4 col-sm-12 mx-auto">
							<div class="img-div my-5 text-center">
								<img src="../image/dog.jpg">
								<p><span id="name">Manish Kumar Pandey</span><br>( Society )<br><strong>farmer001</strong><br>9798316421</p>
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
											<td class="col">Socity</td>
										</tr>
										<tr>
											<td class="col"><strong> Father Name </strong></td>
											<td class="col">:</td>
											<td id="f_name" class="col">Banshidhar Pandey</td>
										</tr>
										<tr >
											<td class="col"><strong>Plant Id</strong></td>
											<td class="col">:</td>
											<td class="col">plant001</td>
										</tr>
										<tr >
											<td class="col"><strong>BMC Id</strong></td>
											<td class="col">:</td>
											<td class="col">bmc001</td>
										</tr>
										<tr >
											<td class="col"><strong>Socity Id</strong></td>
											<td class="col">:</td>
											<td class="col">socity001</td>
										</tr>
										<tr >
											<td class="col"><strong>Email</strong></td>
											<td class="col">:</td>
											<td class="col">smpandey.2008@gmail.com</td>
										</tr>
										<tr >
											<td class="col"><strong>Route No</strong></td>
											<td class="col">:</td>
											<td class="col">1</td>
										</tr>
										<tr >
											<td class="col"><strong>Village</strong></td>
											<td class="col">:</td>
											<td class="col">Agarsanda,Behara</td>
										</tr>
										<tr >
											<td class="col"><strong>Full Add</strong></td>
											<td class="col">:</td>
											<td id="add" class="col">1364-B ShreenathPuram Kota , Rajasthan</td>
										</tr>
										<tr >
											<td class="col"><strong>PIN Code</strong></td>
											<td class="col">:</td>
											<td id="pin" class="col">324010</td>
										</tr>
										<tr >
											<td class="col"><strong>Payee Name</strong></td>
											<td class="col">:</td>
											<td id="payee_name" class="col">Manish Kumar Pandey</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Name</strong></td>
											<td class="col">:</td>
											<td id="bank_name" class="col">PNB</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank Acount No</strong></td>
											<td class="col">:</td>
											<td id="ac_no" class="col">1234567891234567</td>
										</tr>
										<tr >
											<td class="col"><strong>Bank IFSC No</strong></td>
											<td class="col">:</td>
											<td id="ifsc_no" class="col">PNB0123</td>
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
