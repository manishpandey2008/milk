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
				<li >
					<a href="{{ route('outlet_home',['id'=>$user_id])}}" aria-expanded="false">
						<span class="fa fa-home"></span> Home
					</a>
				</li>
				<li>
					<a href="#transaction" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-cart-arrow-down"></span> Transaction
					</a>
					<ul class="collapse list-unstyled" id="transaction">
						<li>
							<a href="#">New Transaction </a>
						</li>
						<li>
							<a href="#">All Transaction List</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="#ec" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-cart-arrow-down"></span> Order
					</a>
					<ul class="collapse list-unstyled " id="ec">
						<li>
							<a href="{{route('outlet_new_order',['id'=>$user_id])}}">New Order </a>
						</li>
						<li>
							<a href="{{route('outlet_order_list',['id'=>$user_id])}}">All Order List</a>
						</li>
					</ul>
				</li>
				<li class="active">
					<a href="#stock" data-toggle="collapse" aria-expanded="false">
						<span class="fa fa-archive"></span> Stock
					</a>
					<ul class="collapse list-unstyled show" id="stock">
						<li>
							<a href="{{route('outlet_add_stock_form',['id'=>$user_id])}}">Add New Product</a>
						</li>
						<li>
							<a href="{{route('outlet_stock_list',['id'=>$user_id])}}">Stock List</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#"  aria-expanded="false">
						<span class="fa fa-user"></span> Your Profile
					</a>
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
					<h4 class="text-center py-3"><strong>Add New Product</strong></h4>
					
					<div style="width:100%;height: 2px;background-color: black"></div>
					@if($msg)
					<div class="row" id="msg_div">
						@if($color=='green')
						<div class="col-lg-8 col-sm-12 mx-auto my-2" style="background-color:rgb(255,187,119); border-radius: 10px; " id="add_data">
							<h5 class="text-center py-2"><strong>{{$msg}}</strong></h5>
						</div>
						@elseif($color=='red')
						<div class="col-lg-8 col-sm-12 mx-auto my-2" style="background-color:rgb(202,4,54); border-radius: 10px; " id="not_add_data">
							<h5 class="text-center py-2"><strong style="color: white">{{$msg}}</strong></h5>
						</div>
						@endif
					</div>
					@endif
					<form method="post" action="{{route('outlet_add_stock',['id'=>$user_id])}}">
						@csrf
						<div class="row">
							<div class="col-lg-4 col-sm-10  my-2">
							    <label>Product Name<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Name" id="productName" name="productName" pattern="[a-zA-Z\s]*" title="Max Length Of String is 50" required="" maxlength="50">
							</div>
							<div class="col-lg-4 col-sm-10  my-2" id="vill_list">
							    <label>Product Unit<span class="text-danger">*</span></label>
							    <select class="form-control" required="" id="productUnit" name="productUnit">
							    	<option value="">--* Select One *--</option>
							    	<option value="kg">Kg</option>
							    	<option value="litter">Litter</option>
							    	<option value="number">Number</option>
							    	<option value="other">Other</option>
							    </select>
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Amount<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Amount" required=""  id="productAmount" name="productAmount" pattern="[0-9]*" maxlength="10">
							</div>
							<div class="col-lg-4 col-sm-10  my-2">    
							    <label>Product Price (Per Unit)<span class="text-danger">*</span></label>
							    <input type="text" class="form-control"  placeholder="Enter Product Price" required=""  id="productPrice" name="productPrice" pattern="[0-9]*" maxlength="10">
							</div>
							<div class="col-lg-12  my-2">
    							<button type="submit" class="btn btn-primary mx-auto"   style="cursor: pointer;">Submit</button>
    						</div>
						</div>
					</form>
				</div>
				<div class="widget-area proclinic-box-shadow  my-3">
					
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
	{{csrf_field()}}
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
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click','.editProduct',function(event){
				var stockId=$(this).val();
				$('#storeId').val("");
				$('#productName').val("");
				$('#unitPrice').val("");
				$('#totalStock').val("");
				$.post('{{ route("get_stock_details")}}',{'stock_id':stockId,'_token':$('input[name=_token]').val()},function(data){
								$('#storeId').val(data['storage_id']);
								$('#productName').val(data['product_name']);
								$('#unitPrice').val(data['market_sell_price']);
								$('#totalStock').val(data['total_stock']);
    			});

			});
			
			// $(document).on('click','#cart',function(e){
			// 	// e.preventDefault();
			// 	var id=$(this).val();

			// 	 	$.post('{{ route("outlet_cart_table")}}',{'id':id,'_token':$('input[name=_token]').val()},function(data){
				 		
			// 	 		   $('#cartTable').html(data);
   //  				});
			// });

			$('#msg_div').show();
			setTimeout(function(){$('#msg_div').hide();}, 5000);
		});
	</script>
</body>
</html>
