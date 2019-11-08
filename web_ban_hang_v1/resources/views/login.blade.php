
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Upvex - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('asset/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="wrapper">

        <!-- end page title --> 
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('home')}}" class="navbar-brand">Back</a>
                    <div class="col-12">
                        @if(Session::has('loi'))
                            <div class="alert alert-danger">
                                {{ Session::get('loi') }}
                            </div>
                        @endif
                    </div>
                    <h4 class="header-title mb-3" style="text-align: center;">Login</h4>
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="col-12">
                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Email</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName2" name="l_email" value="">
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="password2"> Password</label>
                                <div class="col-md-4">
                                    <input type="password" id="Password" name="l_password" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-6"></div>
                                <div class="col-md-4"> 
                                    <input type="submit" class="btn btn-primary waves-effect waves-light" name="" value="Login">
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-5"></div>
                                <div class="col-md-5"><a href="{{route('b_register')}}" class="navbar-brand">Tạo tài khoản mới?</a></div>
                            </div>
                        </div> <!-- end col -->
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
        <!-- Vendor js -->
    <script src="{{ asset ('asset/js/vendor.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{ asset ('asset/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{ asset ('asset/js/pages/form-wizard.init.js')}}"></script>

    <!-- App js-->
    <script src="{{ asset ('asset/js/app.min.js')}}"></script>
</body>
</html>