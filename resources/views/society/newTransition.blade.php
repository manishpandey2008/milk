<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Transition Table</title>
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
				<li >
					<a href="#home" data-toggle="collapse" aria-expanded="false">
						<span class="ti-home"></span> Home
					</a>
					<ul class="collapse list-unstyled " id="home">
						<li>
							<a href="societryHome.html">Home</a>
						</li>
						<li>
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

				<li class="active">
					<a href="#payment-management" data-toggle="collapse" aria-expanded="true">
						<span class="ti-user"></span> Account Management
					</a>
					<ul class="collapse list-unstyled show" id="payment-management">
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
						<span class="ti-car"></span> Vehicle
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
				<li>
					<a href="#profile" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Your Profile
					</a>
					<ul class="collapse list-unstyled" id="profile">
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
					<h3 class="block-title">Account Management >>  All Transition Data</h3>
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
					<h3 class="text-center my-3">New Transition</h3>
				
					
					<div style="width:100%;height: 2px;background-color: black"></div>

					<div class="row">
						<div>
							<form action="transitionTable.html">
								<div class="row">
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>Transition From<span style="color:red">*</span></label>
										<input type="text" name="" placeholder="society" readonly="" class="form-control" required="">
									</div>
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>Transition From ID<span style="color:red">*</span></label>
										<input type="text" name="" placeholder="society001" readonly="" class="form-control" required="">
									</div>
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>To <span style="color:red">*</span></label>
										<select class="form-control" required="">
											<option value="">--* Select One *--</option>
											<option value="farmer">Farmer</option>
											<option value="plant">Plant</option>
										</select>
									</div>
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>To ID <span style="color:red">*</span></label>
										<select class="form-control" required="">
											<option value="">--* Select One *--</option>
											<option value="f1">farmer001</option>
											<option value="f2">farmer001</option>
											<option value="f3">farmer001</option>
											<option value="f4">farmer001</option>
											<option value="f5">farmer001</option>
										</select>
									</div>
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>Transition Amount <span style="color:red">*</span></label>
										<input type="number" name="" class="form-control" required="" min="0" pattern="[0-9]" title="Only Enter Numeric Value">
									</div>
									<div class="col-lg-4 col-sm-10  my-2 form-group">
										<label>Transition Method <span style="color:red">*</span></label>
										<select class="form-control" required="">
											<option value="">--* Select One *--</option>
											<option value="cash">Cash</option>
											<option value="online">Online</option>

										</select>
									</div>								
									<div class="col-lg-4 col-sm-10  my-2">
										<label>Subject<span style="color:red">*</span></label>
										<input type="text" name=""  class="form-control" required="" pattern="[a-zA-Z]{,100}" title="Max length of message is 100">
									</div>
									<div class="col-lg-4 col-sm-10  my-2">
										<label>Date <span style="color:red">*</span></label>
										<input type="Date" name=""  class="form-control" required="">
									</div>
									<div class="col-12 my-2 ">
										<button class="btn btn-primary ">Save</button>
									</div>
								</div>
							</form>
						</div>
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
