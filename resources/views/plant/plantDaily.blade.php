<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Plant Home</title>
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
				<a href="#"><img src="" class="logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#home" data-toggle="collapse" aria-expanded="true">
						<span class="ti-home"></span> Home
					</a>
					<ul class="collapse list-unstyled show" id="home">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Daily Current Report</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#milk-management" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Milk Management 
					</a>
					<ul class="collapse list-unstyled" id="milk-management">
						<li>
							<a href="#">Milk Collection List</a>
						</li>
						<li>
							<a href="#">Milk Collection Notification</a>
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
						<span class="ti-money"></span> Members
					</a>
					<ul class="collapse list-unstyled " id="farmer-dasbord">
						<li>
							<a href="#">All Members</a>
						</li>
						<li>
							<a href="#">Create Members</a>
						</li>
						
					</ul>
				</li>
				<li >
					<a href="#rate-chart" data-toggle="collapse" aria-expanded="false">
						<span class="ti-view-list"></span> Rate Chart
					</a>
					<ul class="collapse list-unstyled " id="rate-chart">
						<li>
							<a href="#">Current Reat Chart</a>
						</li>
						<li>
							<a href="#">Create New Reat Chart</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Account Management
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
						<span class="ti-user"></span> Vehicle
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
						<li>
							<a href="#">Root Master</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#ec" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> E-commerce
					</a>
					<ul class="collapse list-unstyled" id="ec">
						<li>
							<a href="#">All Product List</a>
						</li>
						<li>
							<a href="#">Add New Product </a>
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
				
				<li>
					<a href="#profile" data-toggle="collapse" aria-expanded="false">
						<span class="ti-user"></span> Your Profile
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
			
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Home</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="#">
								<span class="ti-home"></span>
							</a>
						</li>
						
					</ol>
				</div>
			</div>

			<div class="container-fluid home">
				<h3 class="text-center"><u>Current Milk Collection Table</u></h3>

				<div class="row">
					
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow ">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Current Milk Collection</h4>
								<span class="numeric ">200</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow ">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Number Of Collection</h4>
								<span class="numeric ">200</span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row my-4">
					<div class="col-lg-6 col-sm-6 mx-auto">
						<input type="text" name="" placeholder="Search By Vehicle Id ............" class="form-control">
					</div>
				</div>
				<div style="width:100%;height: 2px;background-color: black"></div>
					

				<div class="widget-area proclinic-box-shadow  my-3">
					<div class="row">
						<div class="col-12">
							<table id="tableId" class="table table-responsive-lg table-bordered table-hover table-striped text-center">
									<thead>
										<tr>
											<th class="no-sort">
												<div class="custom-control custom-checkbox">
													<input class="custom-control-input" type="checkbox" id="select-all">
													<label class="custom-control-label" for="select-all"></label>
												</div>
											</th>
											<th>Farmer ID</th>
											<th>Farmer Name</th>
											<th>Father Name</th>
											<th>Phone No</th>
											<th>Photo</th>
											<th>Bank Name</th>
											<th>Payee Name</th>
											<th>Acount No</th>
											<th>IFSC Code</th>
											<th>Detail</th>
										</tr>
									</thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td style="cursor: pointer"><a href="farmerDetails.html">farmer001</a></td>
                                            <td>Manish Pandey</td>
                                            <td>Banshidhar Pandey</td>
                                            <td>6375336527</td>
                                            <td><img src="../image/user.jpg" style="width:70px;height: 70px"></td>
                                            <td>PNB</td>
                                            <td>Manish Pandey</td>
                                           	<td>1234567890123456</td>
                                           	<td>PNB001</td>
                                            <td>
                                            	<a href="farmerDetails.html" class="btn btn-outline-primary">Details</a>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td style="cursor: pointer;"><a href="farmerDetails.html">farmer001</a></td>
                                            <td>Manish Pandey</td>
                                            <td>Banshidhar Pandey</td>
                                            <td>6375336527</td>
                                            <td><img src="../image/user.jpg" style="width:70px;height: 70px"></td>
                                            <td>PNB</td>
                                            <td>Manish Pandey</td>
                                           	<td>1234567890123456</td>
                                           	<td>PNB001</td>
                                           
                                            <td>
                                            	<a href="farmerDetails.html" class="btn btn-outline-primary">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td style="cursor: pointer;"><a href="farmerDetails.html">farmer001</a></a></td>
                                            <td>Manish Pandey</td>
                                            <td>Banshidhar Pandey</td>
                                            <td>6375336527</td>
                                            <td><img src="../image/user.jpg" style="width:70px;height: 70px"></td>
                                            <td>PNB</td>
                                            <td>Manish Pandey</td>
                                           	<td>1234567890123456</td>
                                           	<td>PNB001</td>
                                            
                                            <td>
                                            	<a href="farmerDetails.html" class="btn btn-outline-primary">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox" id="1">
                                                    <label class="custom-control-label" for="1"></label>
                                                </div>
                                            </td>
                                            <td style="cursor: pointer;"><a href="farmerDetails.html">farmer001</a></a></td>
                                            <td>Manish Pandey</td>
                                            <td>Banshidhar Pandey</td>
                                            <td>6375336527</td>
                                            <td><img src="../image/user.jpg" style="width:70px;height: 70px"></td>
                                            <td>PNB</td>
                                            <td>Manish Pandey</td>
                                           	<td>1234567890123456</td>
                                           	<td>PNB001</td>
                                            
                                            <td>
                                            	<a href="farmerDetails.html" class="btn btn-outline-primary">Details</a>
                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
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
