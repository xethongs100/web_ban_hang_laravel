@extends('layout')

@section('content')
<div class="navbar navbar-default navbar-fixed-top" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="{{route('home')}}" class="navbar-brand">Online Shopping</a>
            </div>
            <!-- <ul class="nav navbar-nav navbar-right">
				<li id='shoppingcart'><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span>	</a>
					<div class="dropdown-menu" style="width: 400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">S. No.</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Sign In</a>
					<ul class="dropdown-menu">
					<div style="width: 300px;">
						<div class="panel panel-primary">
							<div class="panel-heading">Login</div>
							<div class="panel-heading">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email">
								<label for="email">Password</label>
								<input type="password" class="form-control" id="password">
								<p><br></p>
								<a href="#" style="color: white;list-style-type: none;">Forgot Password?</a>
								<input type="submit" class="btn btn-success" style="float: right;bottom:12px;" id="login" value="Login" name="">
							</div>
							<div class="panel-footer" id="e_msg"></div>
						</div>
					</div>
				</ul>

				<li><a href="register_view.php">Sign Up</a></li> -->
			</ul>

        </div>
    </div>
    <p><br><br></p>
    <p><br><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg"></div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Signup Form</div>
                    <div class="panel-body">
                        <form method="post" action="{{route('register')}}">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                        	<div class="row">
                        		<div class="col-md-12">
                        			@if(Session::has('success'))
                        			<div class="alert alert-success">
                        				{{Session::get('success')}}
                        			</div>
                        			@endif
                        		</div>
                        	</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="f_name">Full Name</label>
                                    <input type="text" id="f_name" name="full_name" class="form-control">
                                    <br>
                                    @if($errors->has('full_name'))
                                    	<div class="alert alert-danger">
                                    		{{ $errors->first('full_name') }}
                                    	</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                    <br>
                                    @if($errors->has('email'))
                                    	<div class="alert alert-danger">
                                    		{{ $errors->first('email') }}
                                    	</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                    <br>
                                    @if($errors->has('password'))
                                    	<div class="alert alert-danger">
                                    		{{ $errors->first('password') }}
                                    	</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control">
                                    <br>
                                    @if($errors->has('mobile'))
                                    	<div class="alert alert-danger">
                                    		{{ $errors->first('mobile') }}
                                    	</div>
                                    @endif
                                </div>
                                <div class="col-md-6"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address #1</label>
                                    <input type="textarea" id="address1" name="address1" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address #2</label>
                                    <input type="textarea" id="address2" name="address2" class="form-control">
                                </div>
                            </div>

                            <br><br>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Signup" name="signup" id="signup_btn">
                            </div>

                    </div>
                </div>
                </form>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
@endsection