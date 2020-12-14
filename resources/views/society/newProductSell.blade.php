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
				<li class="active">
					<a href="#plant" data-toggle="collapse" aria-expanded="true">
						<span class="fa fa-shopping-cart"></span> E-commerce
					</a>
					<ul class="collapse list-unstyled show" id="plant"> 
						<li>
							<a href="#">All Old Orders</a>
						</li>
						<li>
							<a href="{{route('society.neworder',['id'=>$user['user_id']])}}">New Order</a>
						</li>
						<li>
							<a href="{{route('society-sell-list',['id'=>$user['user_id']])}}">All Sell List</a>
						</li>
						<li>
							<a href="{{route('society.newsell',['id'=>$user['user_id']])}}">New Sell</a>
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
					<h3 class="block-title">New Sell</h3>
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
					<h4 class="text-center py-3"><strong>New Sell</strong></h4>
					<p class="text-center my-2" id="sell_conf_msg"></p>
					<div style="width:100%;height: 2px;background-color: black"></div>
					
					<div class="row" id="farmerSerchDiv">
						<div class="col-lg-6 col-sm-12 mx-auto my-2">
							<input type="text"  list="farmerList" class="form-control" id="farmerId" placeholder="Search Farmer......" style="width: 100%">
							<datalist id="farmerList">
								@foreach($farmer_list as $fl)
								<option value="{{$fl['user_id']}}"></option>
								@endforeach
							</datalist>
						</div>
					</div>
					<div id="addProductForm" style="display: none;">
						<div class="row">
							<div class="col-6 my-2">
								<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="cart">
								  <span class="fa fa-shopping-cart"></span> <span class="badge badge-light" style="border-radius: 50%" id="cart_val"></span>
								</button>
							</div>
							<div class="col-6  my-2">
		    					<button class="btn btn-primary float-right"   style="cursor: pointer;" id="reset">Reset</button>
		    				</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-6 mx-auto">
								<p class="text-center" id="farmer_name"></p>
							</div>
							<div class="col-lg-2 col-sm-6 my-2 mx-auto">
								<input type="text" class="form-control" name=""  readonly="" id="total_price">
							</div>
						</div>
						<div class="row collapse" id="collapseExample">
							<div class="col-12 table-responsive my-4">
								<table class="table text-center table-bordered table-hover table-striped " >
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
								<button class="btn btn-primary mb-2" style="width: 100%" id="final_sell">Sell</button>
							</div>
						</div>
						<div style="width:100%;height: 2px;background-color: black"></div>
						<p class="text-center my-2" id="msg" style="display: none"></p>
						<div>
							<form method="post" id="addincart">
					        	@csrf
								<div class="row">
							        <div class="col-lg-4 col-sm-10  my-2">
							            <label>Name <span style="color: red">*</span></label>
							            <input type="text" list="product_list" name="product_name" id="product_name" class="form-control" required="">
										<datalist id="product_list">
											@foreach($product_list as $pl)
										    <option value="{{$pl['product_name']}}"></option>
										    @endforeach
										</datalist>
							        </div>
							        <div class="col-lg-4 col-sm-10  my-2">
							            <label>Per Unit Price (<span id="productUnit"></span>)</label>
							            <input type="text" class="form-control" name="perUnitPrice" id="perUnitPrice" readonly="">
							        </div>
							        <div class="col-lg-4 col-sm-10  my-2">
							            <label>Amount <span style="color: red">*</span></label>
							            <input type="number" class="form-control" name="productAmount" id="productAmount" required="" min="1">
							        </div>
							        <div class="col-lg-4 col-sm-10  my-2">
							            <label>Total Price</label>
							            <input type="text" class="form-control" name="totalPrice" id="totalPrice" readonly="">
							        </div>
							        <div class="col-lg-10  my-2">
		    							<button type="submit" class="btn btn-primary mx-auto"   style="cursor: pointer;" >Add</button>
		    						</div>
							     </div>
							 </form>
						</div>
					</div>
				</div>
			<!-----------------------------MODEL------------------>
				<div class="modal fade editProductModel"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-body">
				       <h5 class="text-center"><strong>Product Addition</strong></h5>
				        <div style="width:100%;height: 2px;background-color: black"></div>
				        <div id="add_msg" style="display: ;">
				        	<p class="text-center my-2"><strong>This product is alrady added in cart</strong></p>
				        </div>
				        <form method="post" id="updateProduct">
				        	@csrf
							<div class="row">
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Name</label>
						            <input type="text" class="form-control"   id="productName" name="productName" readonly="">
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Add Product (<span id="edit_productUnit"></span>)</label>
						            <input type="number" class="form-control" required="" id="productCount" name="productCount"  min=1>
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Price</label>
						            <input type="text" class="form-control" name="" id="" readonly="">
						        </div>
						        <div class="col-lg-12  my-2">
	    							<button type="submit" class="btn btn-primary mx-auto"   style="cursor: pointer;" >Update</button>
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
			var farmer_id="";
			var farmer_name="";
			$(document).on('keyup',function(event){
				if (event.keyCode === 13)
				 {
				 	 farmer_id=$('#farmerId').val();

				 	$.post('{{ route("society-getcartdata")}}',{'farmer_id':farmer_id,'_token':$('input[name=_token]').val()},function(data){

						$('#farmerSerchDiv').hide();
				 		$('#addProductForm').show();

				 		$('#farmer_name').text(data['farmer_name']);
				 		$('#cart_val').text(data['cart_count']);
				 		$('#total_price').val(data['total_price']);
				 		$('#cart').val(farmer_id);

				 		farmer_name=data['farmer_name'];
    				});
				 }
			});

			var product_id="";
			$(document).on('change','#product_name',function(){
				var val=$(this).val();
				$('#productAmount').val("");
				if(val){
					$.post('{{ route("society-product-info")}}',{'pro_name':val,'_token':$('input[name=_token]').val()},function(data){
						$('#productUnit').text(data['product_unit']);
				 		$('#perUnitPrice').val(data['each_sell_price']);
				 		$('#productAmount').attr('max',data['total_stock']);

				 		product_id=val;
				 		
    				});
				}
			});

			$(document).on('change','#productAmount',function(event){
				var product_count=$(this).val();
					$.post('{{ route("society-product-info")}}',{'pro_name':product_id,'_token':$('input[name=_token]').val()},function(data){

								var x=(data['each_sell_price']*product_count);

								$('#totalPrice').val(x);
								
    				});

			 });

			$(document).on('submit','#addincart',function(event){
				event.preventDefault();
				var productname=$('#product_name').val();
				var unutPrice=$('#perUnitPrice').val();
				var productAmount=$('#productAmount').val();
				var totalPrice=$('#totalPrice').val();

				var sendData='{"productname":"'+productname+'","unutPrice":"'+unutPrice+'","productAmount":"'+productAmount+'","totalPrice":"'+totalPrice+'","farmer_id":"'+farmer_id+'","farmer_name":"'+farmer_name+'"}';

				sendData = JSON.parse(sendData);

				$.post('{{ route("society-add-product")}}',{'sendData':sendData,'_token':$('input[name=_token]').val()},function(data){
						if(data['conf']=='1'){
								var msg='<strong style="color: green">Product Add Sucssesfully</strong>';
								$('#msg').html(msg);
						}else{
							var msg='<strong style="color: red">Product Alraedy In Cart</strong>';
							$('#msg').html(msg);
						}

						$('#cart_val').text(data['countProduct']);
						$('#total_price').val(data['total_price']);

						$('#msg').show();
						setTimeout(function(){$('#msg').hide();}, 5000);

						$('#product_name').val("");
						$('#perUnitPrice').val("");
						$('#productAmount').val("");
						$('#totalPrice').val("");
    				});
			});

			$(document).on('click','#final_sell',function(){ 

				$.post('{{ route("society-final-sell")}}',{'farmer_id':farmer_id,'_token':$('input[name=_token]').val()},function(data){

						$('#addProductForm').hide();
						$('#farmerSerchDiv').show();
						var msg="";
						if(data=='1')
						{
						msg='<strong style="color: Green">Order Booked, Check Your Notification</strong>'
						}else{
						msg='<strong style="color: red">Please Order Again From Cart</strong>'
						}
						$('#sell_conf_msg').html(msg);
						$('#sell_conf_msg').show();
						setTimeout(function(){$('#sell_conf_msg').hide();}, 5000);
    			});
			});


			$(document).on('click','.editProuct',function(event){
				var product_id=$(this).val();

				console.log(product_id);
				// $('#productId').val("");
				// $('#productName').val("");
				// $('#productCount').val("");
				// $('#totalPrice').val("");
				// $.post('{{ route("society.productdata")}}',{'product_id':product_id,'_token':$('input[name=_token]').val()},function(data){
				// 			console.log(data['data']);
				// 				if(data['data']=='0'){
				// 					$("#add_product_form").hide();
				// 					$('#add_msg').show();
				// 				}else{
				// 					$('#add_msg').hide();
				// 					$("#add_product_form").show();


				// 					$('#productId').val(product_id);
				// 					$('#productName').val(data['data']['product_name']);
				// 					$('#productUnit').text(data['data']['product_unit']);
				// 				}
    // 			});

			});


			$(document).on('submit','#updateProduct',function(){
				
			});

			

			$(document).on('click','#reset',function(event){
					$('#farmerSerchDiv').show();
				 	$('#addProductForm').hide();
			});


			$(document).on('click','.deleteProduct',function(event){
					console.log("delete");
			});


			$(document).on('click','#cart',function(e){
				// e.preventDefault();
				var farmer_id=$(this).val();

				 	$.post('{{ route("society-getcarttable")}}',{'farmer_id':farmer_id,'_token':$('input[name=_token]').val()},function(data){

				 		  $('#cartTable').html(data);
    				});
			});
		});
	</script>
</body>
</html>
