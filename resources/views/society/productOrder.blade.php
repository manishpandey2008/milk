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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
							<a href="{{route('society.home')}}">Home</a>
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
							<a href="{{ route('society.farmerlist')}}">All Farmers</a>
						</li>
						<li>
							<a href="{{ route('society.registration')}}">Create Framer</a>
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
							<a href="{{ route('milkcollectiontable')}}">Milk Collection Table</a>
						</li>
						<li>
							<a href="{{ route('milkcollection')}}">New Collection</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchlist')}}">Milk Dispatch Table</a>
						</li>
						<li>
							<a href="{{ route('milkdispatchform')}}">Milk Dispatch</a>
						</li>
					</ul>
				</li>
	
				<li>
					<a href="#payment-management" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-money"></span> Account Management
					</a>
					<ul class="collapse list-unstyled" id="payment-management">
						<li>
							<a href="{{ route('society-allTransaction')}}">All Transition Data</a>
						</li>
						<li>
							<a href="{{ route('society-newTransaction')}}">New Transition</a>
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
							<a href="{{route('society-order-list')}}">All Orders List</a>
						</li>
						<li>
							<a href="{{route('society.neworder')}}">New Order</a>
						</li>
						<li>
							<a href="{{route('society-sell-list')}}">All Sell List</a>
						</li>
						<li>
							<a href="{{route('society.newsell')}}">New Sell</a>
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
					<h3 class="block-title">Home</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							{{$user['user_id']}}
						</li>
					</ol>
				</div>
			</div>


			<div class="container-fluid home">
				<div class="container-fluid widget-area proclinic-box-shadow  my-3">
					<h4 class="text-center py-3"><strong>Add New Products</strong></h4>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					<div class="row">
						<div class="col-lg-1 col-sm-2  float-right my-2">
							<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="cart" value="{{$user['user_id']}}">
							  <span class="fa fa-shopping-cart"></span> <span class="badge badge-light" style="border-radius: 50%">{{$add_product_count}}</span>
							</button>
						</div>
						@if($msg)
						<div class="col-10 float-right" id="msg_div" style="display: ;">
							{{$msg}}
						</div>
						@endif
					</div>
					<div class="row collapse" id="collapseExample">
						<div class="col-12 table-responsive my-4">
							<table class="table text-center table-bordered table-hover table-striped " id="myTable1">
								<thead >
									<tr>
									  <th scope="col">Name</th>
								      <th scope="col">Amount</th>
								      <th scope="col">Total Price</th>
								      <th></th>
								    </tr>
								  </thead>
								  <tbody id="cartTable">
								  	
								  </tbody>
							</table>
						</div>
							<div class="col-4 mx-auto">
								<form method="post" action="{{ route('society-order-product')}}">
									@csrf
									<button class="btn btn-primary mb-2" style="width: 100%" id="final_order">Order</button>
								</form>
							</div>
						</div>
					
					<div class="row">
						<div class="col-12 table-responsive my-4">
							<table class="table text-center table-bordered table-hover table-striped " id="myTable">
							  <thead >
							    <tr>
								  <th scope="col">Name</th>
							      <th scope="col">Type</th>
								  <th scope="col">Unit</th>
							      <th scope="col">MRP Price(Per Unit)</th>
							      <th scope="col">Offer(%)</th>
							      <th scope="col">Purchase Price</th>
							      <th scope="col">Photo</th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($product_list as $pl)
							  	<tr>
							  		<td scope="col">{{$pl['product_name']}}</td>
							  		<td scope="col">{{$pl['product_type']}}</td>
							  		<td scope="col">{{$pl['product_unit']}}</td>
							  		<td scope="col">{{$pl['product_price']}}</td>
							  		<td scope="col">
							  			@if(!$pl['product_offer'])
							  				0
							  			@else
							  				{{$pl['product_offer']}}
							  			@endif
							  		</td>
							  		<td scope="col">
							  			@php
							  				$benefits =($pl['product_price']*$pl['product_offer'])/100;
							  				$sell=$pl['product_price']-$benefits;
							  			@endphp
							  			{{$sell}}
							  		</td>
							  		<td scope="col">
							  			<img src="{{asset('storage/product_photo/'.$pl['product_photo'])}}" style="width: 80px;height: 80px">
							  		</td>
							  		<td scope="col">
							  			<button class="btn btn-primary add_prduct" value="{{$pl['product_id']}}" data-toggle="modal" data-target=".myModal">Add</button>
							  		</td>
							  	</tr>
							  	@endforeach
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			<!-----------------------------MODEL------------------>
				<div class="modal fade myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
				       <h5 class="text-center"><strong>Product Addition</strong></h5>
				        <div style="width:100%;height: 2px;background-color: black"></div>
				        <div id="add_msg" style="display: ;">
				        	<p class="text-center my-2"><strong>This product is alrady added in cart</strong></p>
				        </div>
				        <form method="post" action="{{ route('society.addcart')}}" id="add_product_form">
				        	@csrf
							<div class="row">
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Product Id</label>
						            <input type="text" class="form-control" id="productId" name="productId" readonly="">
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Name</label>
						            <input type="text" class="form-control"   id="productName" name="productName" readonly="">
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Add Product (<span id="productUnit"></span>)</label>
						            <input type="number" class="form-control" required="" id="productCount" name="productCount"  min=1>
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Total Price</label>
						            <input type="text" class="form-control" name="totalPrice" id="totalPrice" readonly="">
						        </div>
						        <div class="col-lg-12  my-2">
	    							<button type="submit" class="btn btn-primary mx-auto"   style="cursor: pointer;" >Add</button>
	    						</div>
						     </div>
						 </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default"  id="close_btn" data-dismiss="modal" aria-label="Close">Close</button>
				      </div>
				    </div>
				  </div>
				</div>

			<!--------------------------MODEL--------------------->

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
	{{csrf_field()}}
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

	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.add_prduct',function(event){
				var product_id=$(this).val();
				$('#productId').val("");
				$('#productName').val("");
				$('#productCount').val("");
				$('#totalPrice').val("");
				$.post('{{ route("society.productdata")}}',{'product_id':product_id,'_token':$('input[name=_token]').val()},function(data){
							console.log(data['data']);
								if(data['data']=='0'){
									$("#add_product_form").hide();
									$('#add_msg').show();
								}else{
									$('#add_msg').hide();
									$("#add_product_form").show();


									$('#productId').val(product_id);
									$('#productName').val(data['data']['product_name']);
									$('#productUnit').text(data['data']['product_unit']);
								}
    			});

			});
			$(document).on('change','#productCount',function(event){
				var product_count=$(this).val();
				var product_id=$('#productId').val();

				
					$.post('{{ route("plant.productdata")}}',{'product_id':product_id,'_token':$('input[name=_token]').val()},function(data){

								var x=(data['product_price']*data['product_offer'])/100;

								var sell_price=data['product_price']-x;

								var total_price=sell_price*product_count;

								$('#totalPrice').val(total_price);
								
    				});

			});

			$(document).on('click','#cart',function(e){
				// e.preventDefault();
				var id=$(this).val();

				 	$.post('{{ route("society-cart-table")}}',{'id':id,'_token':$('input[name=_token]').val()},function(data){
				 		
				 		   $('#cartTable').html(data);
    				});
			});

			$('#msg_div').show();
			setTimeout(function(){$('#msg_div').hide();}, 5000);
		});
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
		    $('#myTable').DataTable();
		     $('#myTable1').DataTable();
		} );
	</script>
</body>
</html>
