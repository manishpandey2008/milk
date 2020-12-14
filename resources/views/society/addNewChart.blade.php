<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Societry Home</title>
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
				<li class="active">
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="true">
						<span class="ti-view-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled show" id="rate-chart">
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
					<ul class="collapse list-unstyled" id="milk-management">
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

				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
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
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-bell" style=""></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<div class="alert alert-info my-2 notification mx-2" role="alert" data-toggle="modal" data-target="#notification">
									<p><strong>plant001 <span style="float: right;">20:30 20/10/2020</span></strong></p>
									<p class="abcd">
										Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
									</p>
								</div>
								<div class="alert alert-info my-2 notification" role="alert" style="margin: 10px;" data-toggle="modal" data-target="#notification">
									<p><strong>plant001<span style="float: right;">20:30 20/10/2020</span></strong></p>
									<p class="abcd">
										pandey Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.
									</p>
								</div>

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
	<script type="text/javascript">
		$(document).ready(function () {
			$(".notification").on('click',function(){
				var v=$(this).html();
				$('#noti').has(".abcd").removeClass("abcd");
				$('#noti').html(v);
				
			})
		})
	</script>
</body>
</html>
