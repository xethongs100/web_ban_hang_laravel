<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('asset/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{asset('asset/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('asset/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('asset/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                            @if(Session::has('email_admin'))
                                <span class="pro-user-name ml-1">
                                    {{Session::get('email_admin')}}<i class="mdi mdi-chevron-down"></i> 
                                </span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="#" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('asset/images/logo-dark.png')}}" alt="" height="26">
                            <!-- <span class="logo-lg-text-dark">Upvex</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{asset('asset/images/logo-sm.png')}}" alt="" height="28">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Reports
                            <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Finance Report
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Monthly Report
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Revenue Report
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Settings
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Help & Support
                            </a>

                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        @yield('menu')
        
        <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        @yield('table_content')

        @yield('content')
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('asset/js/vendor.min.js')}}"></script>

        <!-- third party js -->
        <script src="{{asset('asset/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('asset/libs/datatables/dataTables.select.min.js')}}"></script>
        <script src="{{asset('asset/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('asset/libs/pdfmake/vfs_fonts.js')}}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{asset('asset/js/pages/datatables.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('asset/js/app.min.js')}}"></script>
        
    </body>
</html>