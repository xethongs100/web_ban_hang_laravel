@extends('layout')
@section('content')
@if(Session::has('thongbao'))
	<script type="text/javascript">
		alert("{{Session::get('thongbao')}}")
	</script>
@endif
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="{{route('home')}}" class="navbar-brand">OnlineShopping</a>
			</div>

			<ul class="nav navbar-nav">
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name="">
				</li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn" name=""><span
							class='glyphicon glyphicon-search'></span></button></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('list-cart')}}" class="dropdown-toggle" >
					<span class="glyphicon glyphicon-shopping-cart"></span></span> </a>
					<!-- <div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Id</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class="panel-body">
							</div>
							<div class="panel-footer"></div>
						</div>
					</div> -->
				</li>
			@if(Auth::check()&&Session::has('name')&&Session::has('id'))
				<li><a href="{{ route('profile-user',['id'=>Session::get('id')])}}">{{Session::get('name')}}</a></li>
				<li><a href="{{ route('logout')}}">Log out</a></li>
			@else
				<li><a href="{{ route('re_login')}}">Sign In</a></li>
				<li><a href="{{route('b_register')}}">Sign Up</a></li>
			@endif
			</ul>
		</div>
	</div>
	<br><br><br>
	<!-- Slider Begins -->

	<div class="one-time">
		<div><img src="assets/images/car1.jpg"></div>
		<div><img src="assets/images/car2.jpg"></div>
		<div><img src="assets/images/car3.jpg"></div>
	</div>

	<!-- Slider ends -->

	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_cat"></div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
						@foreach($listCategories as $ds1)
							<li><a href="?categories={{$ds1->id}}">{{$ds1->cat_title}}</a></li>
						@endforeach
				</div>
				<div id="get_brand"></div>
				<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brands</h4></a></li>
						@foreach($listBrand as $ds2)
							<li><a href="?brands={{$ds2->id}}">{{$ds2->brand_title}}</a></li>
						@endforeach
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12" id="cartmsg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading text-center">--Featured Products--
						<div class='pull-right'>
							Sort: &nbsp;&nbsp;&nbsp;<a href="#" id='price_sort'>Price</a> | <a href="#"
								id='pop_sort'>Popularity</a>
						</div>
					</div>
					<div class="panel-body">
						<div id="get_product"></div>
						@for($i=0;$i<1;$i++)
							@if(isset($_GET['categories']))
								@foreach ($listProduct as $ds) 
									@if($ds->product_cat==$_GET['categories'])
										<div class="col-md-4">
										<form method="get" action="{{route('add-cart',['id'=>$ds->id])}}">
										<div class="panel panel-info">
												<div class="panel-heading">{{$ds->product_title}}</div>
												<div class="panel-body"><img src="assets/prod_images/{{$ds->product_image}}" style="width:200px; height:180px;"></div>
												<div class="panel-heading">${{$ds->product_price}}
												<input type="submit" name="" class="btn btn-danger btn-xs" style="float:right;" value="Add to Cart">
												</div>
										</div>
									</form>
										</div>
									@endif
								@endforeach
								break;


							@elseif(isset($_GET['brands']))
								@foreach ($listProduct as $ds) 
									@if($ds->product_brand==$_GET['brands'])
										<div class="col-md-4">
											<form method="get" action="{{route('add-cart',['id'=>$ds->id])}}">
												<div class="panel panel-info">
												<div class="panel-heading">{{$ds->product_title}}</div>
												<div class="panel-body"><img src="assets/prod_images/{{$ds->product_image}}" style="width:200px; height:180px;"></div>
												<div class="panel-heading">${{$ds->product_price}}
												<input type="submit" name="" class="btn btn-danger btn-xs" style="float:right;" value="Add to Cart">
												</div>
										</div>
									</form>
										</div>
									@endif
								@endforeach

							@else
								@foreach ($listProduct as $ds) 
								<div class="col-md-4">
									<form method="get" action="{{route('add-cart',['id'=>$ds->id])}}">
										<div class="panel panel-info">
												<div class="panel-heading">{{$ds->product_title}}</div>
												<div class="panel-body"><img src="assets/prod_images/{{$ds->product_image}}" style="width:200px; height:180px;"></div>
												<div class="panel-heading">${{$ds->product_price}}
												<input type="submit" name="" class="btn btn-danger btn-xs" style="float:right;" value="Add to Cart">
												</div>
										</div>
									</form>
								</div>
								@endforeach
							@endif
							
						@endfor
					</div>
					<span style="margin-left:30px;">{{ $listProduct->links() }}</span>
					<div class="panel-footer">Ngày hiện tại:
						<?php
						// Hiện ngày/tháng/năm
							$date = getdate();
							echo $date['mday']." / ".$date['mon']." / ".$date['year'];
						?>

					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class='pagination' id='pageno'>

					</ul>
				</center>
			</div>

			<!-- Modal -->

			<div class="modal fade" id="prod_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Product Details</h4>
						</div>
						<div class="modal-body" id='dynamic_content'>
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>

			<!-- Modal ends-->
		</div>
	</div>
@endsection