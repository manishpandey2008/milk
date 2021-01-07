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
					<h4 class="text-center py-3">All Product Stock List</h4>

					<div class="row my-2">
						<div class="col-lg-6 col-sm-6 mx-auto">
							<input type="text" name="" placeholder="Search............" class="form-control">
						</div>
					</div>
					<div style="width:100%;height: 2px;background-color: black"></div>

					<div class="row">
						<div class="col-12" id="farmer_dasbord_table" style="width: 100%;overflow-x: scroll;">
							<table id="tableId" class="table table-responsive-sm table-bordered table-hover table-striped text-center" >
									<thead>
										<tr>
											
											<th>Product Name</th>
											<th>Product Unit</th>
											<th>Per Unit Price</th>
											<th>Total Stock</th>
											<th></th>
										</tr>
									</thead>
                                    <tbody>
                                    	@foreach($stock_list as $sl)
                                        <tr>
                                           <td>{{$sl['product_name']}}</td>
                                           <td>{{$sl['product_unit']}}</td>
                                           <td>{{$sl['market_sell_price']}}</td>
                                           <td>{{$sl['total_stock']}}</td>
                                           <td>
                                            	<div class="btn-group" role="group" aria-label="Basic example">
													<button type="button" class="btn btn-secondary editProduct" value="{{$sl['storage_id']}}" data-toggle="modal" data-target="#myModal">Edit</button>
													<button type="button" class="btn btn-secondary deleteProduct" value="{{$sl['storage_id']}}">Delete</button>
												</div>
                                           </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>	

                                <td>
                                	<nav aria-label="Page navigation example">
                                		<ul class="pagination justify-content-center export-pagination">
                                			<li class="page-item">
                                				<a class="page-link" href="#"><span class="ti-file"></span> PDF</a>
                                			</li>
                                		</ul>
                                	</nav>
                                </td> 
						</div>
					</div>
				</div>
				<!-----------------------------MODEL------------------>
				<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="myModal" >
				  <div class="modal-dialog" role="document" >
				    <div class="modal-content">
				      <div class="modal-body" >
				       <h5 class="text-center"><strong>Product Addition</strong></h5>
				        <div style="width:100%;height: 2px;background-color: black"></div>
				        <form method="post" action="{{ route('update_store',['id'=>$user_id])}}" id="add_product_form">
				        	@csrf
							<div class="row">
								<div class="col-lg-6 col-sm-10  my-2">
									 <label>Store Id</label>
						            <input type="text" class="form-control"   id="storeId" name="storeId" readonly="">
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Product Name</label>
						            <input type="text" class="form-control"   id="productName" name="productName" readonly="">
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Unit Price (<span id="productUnit"></span>)</label>
						            <input type="number" class="form-control" required="" id="unitPrice" name="unitPrice"  min=1>
						        </div>
						        <div class="col-lg-6 col-sm-10  my-2">
						            <label>Total Stock</label>
						            <input type="text" class="form-control" name="totalStock" id="totalStock">
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

			// $('#msg_div').show();
			// setTimeout(function(){$('#msg_div').hide();}, 5000);
		});
	</script>
</body>
</html>
