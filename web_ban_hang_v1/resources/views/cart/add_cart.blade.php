<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OnlineShopping</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<script>
	// 	function calculate(){
	// 	var soluong,tien,result,i=0;
	// 	var ttien=0;
		
	// 	do
	// 	{
	// 		var total=0;
	// 		tien = document.getElementById('k' + i);
	// 		soluong = document.getElementById('v' + i);
	// 		result = document.getElementById('result' + i);
	// 		var tongtien = document.getElementById('tongtien');
	// 		total = tien.value * soluong.value;
	// 		ttien = ttien + total;
	// 		result.value=total;
	// 		tongtien.value = ttien;
	// 		i++;
	// 	}while(i<100);
		
	// }
</script>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="{{route('home')}}" class="navbar-brand">OnlineShopping</a>
			</div>
		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
			<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-primary text-center">
					<div class="panel-heading">Sản phẩm bạn đã chọn:{{Cart::count()}}</div>
					<div class="panel-body"></div>
					<div class="row">
						<div class="col-md-2"><b>Action</b></div>
						<div class="col-md-2"><b>Product Image</b></div>
						<div class="col-md-2"><b>Product Name</b></div>
						<div class="col-md-2"><b>Product Price</b></div>
						<div class="col-md-2"><b>Quantity</b></div>
						<div class="col-md-2"><b>Price in $</b></div>
					</div>
					<br><br>
					<div id='cartdetail'>
						<form method="POST" action="">
							<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
							@foreach($listCart as $list)
								<div class="row">
										<div class="col-md-2"><a href="{{route('delete-cart',['id'=>$list->rowId],'')}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="" class="update" id="{{$list->rowId}}"><p class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></p></a>
										</div>
										<div class="col-md-2"><img src="../assets/prod_images/{{$list->options->img}}" width="60px" height="60px"></div>
										<div class="col-md-2">{{$list->name}}</div>
										<div class="col-md-2">${{$list->price}}</div>
										<div class="col-md-2"><input  class="form-control" value="{{$list->qty}}"type="text" size="10px"  ></div>
										<div class="col-md-2"><input class="form-control" type="text" size="10px" value="{{$list->price*$list->qty}}" readonly></div>
								</div>
							@endforeach
						</form>
					</div>
					<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">
							<b>Total: ${{Cart::subtotal()}}</b>
						</div>
					</div>
					<div class="panel-footer">

					</div>
				</div>
					<button class='btn btn-success btn-lg pull-right' id='checkout_btn' data-toggle="modal" data-target="#myModal">Checkout</button>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="../main.js"></script>
	<script src="../asset/js/ajax.js"></script>
</body>
<div class="foot"><footer>
<p>Kmin & Code-Project</p>
</footer></div>
<style> .foot{text-align: center;}
</style>
</html>