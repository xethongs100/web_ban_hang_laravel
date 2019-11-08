@extends('layout')

@section('content')
	<br><br>
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg">
            	@if(count($errors)>0)
            		<div class="alert alert-danger">
            			<ul>
		            		@foreach($errors->all() as $err)
		            				<li>{{$err}}</li>
		            		@endforeach
		            	</ul>
            		</div>
            	@endif
                @if(Session::has('change'))
                    <div class="alert alert-success">
                        {{Session::get('change')}}
                    </div>
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Change password</div>
                    <div class="panel-body">
                    	@if(isset($user))
                        <form method="post" action="{{route('c_password',['id'=>$user->id])}}">
                        	@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">Re-enter your old password</label>
                                    <input type="password" id="f_name" name="change_pass1" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">New password</label>
                                    <input type="password" id="l_name" name="change_pass2" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile">Re-enter new password</label>
                                    <input type="password" id="mobile" name="change_pass3" class="form-control">
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Change" name="change_password" id="signup_btn">
                                    <a href="{{route('home')}}" class="btn btn-primary" value="Logout" name="change_password" id="signup_btn">Trang chủ</a>
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
@endsection