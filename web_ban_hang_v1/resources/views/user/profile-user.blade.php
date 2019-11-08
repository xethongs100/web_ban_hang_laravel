
@extends('layout')
@section('content')
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="../controller.php" class="navbar-brand"></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('logout')}}"><span class="glyphicon glyphicon-off"></span> Exit</a></li>
				<ul class="dropdown-menu">
				</ul>
			</ul>
        </div>
    </div>
    <p><br><br></p>
    <p><br></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg">
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Profile User</div>
                    <div class="panel-body">
                    @if(isset($user))    
                        <form method="post" action="{{route('c_profile',['id'=>$user->id])}}">
                        	@csrf
                            <div class="row">
                                    <div class="col-md-12">
    	                                <div class="text-center">
                                        <img src="/assets/images/avatar.png" style="width:180px;" class="avatar img-circle img-thumbnail" alt="avatar">
                                        <h5>Photo profile</h5>
                                        </div></hr><br>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="f_name">Full Name</label>
                                    <input type="text" id="f_name" name="change_f_name" class="form-control" value="{{$user->fullname}}"  >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pass">Password</label>
                                    <input type="password" id="email" name="" class="form-control" value="{{$user->password}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="change_mobile" class="form-control" value="{{$user->mobile}}" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">  
                                </div>
                                <div class="col-md-6"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Address #1</label>
                                    <input type="textarea" id="address1" name="change_address1" class="form-control" value="{{$user->address1}}" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Address #2</label>
                                    <input type="textarea" id="address2" name="change_address2" class="form-control" value="{{$user->address2}}" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="Edit Personal Information" name="edit_profile" id="signup_btn">
                                    <a href="{{route('edit_password',['id'=>$user->id])}}" class="btn btn-primary">Change Password</a>
                                </div>
                            </div>
                    </div>
                    </div>
                </form>
                @endif
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
    <div class="foot">
<footer>
    <p> <?php
        // Hiện ngày/tháng/năm
        $date = getdate();
        echo $date['mday']." / ".$date['mon']." / ".$date['year'];						
	?></p>
</footer>
</div>
<style>
    .foot {
        text-align: center;
    }
</style>
@endsection