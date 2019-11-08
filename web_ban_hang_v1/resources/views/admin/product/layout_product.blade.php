<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Form</title>
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

    @yield('content')

    <script src="{{ asset ('assets/js/vendor.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{ asset ('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{ asset ('assets/js/pages/form-wizard.init.js')}}"></script>

    <!-- App js-->
    <script src="{{ asset ('assets/js/app.min.js')}}"></script>
</body>
</html>