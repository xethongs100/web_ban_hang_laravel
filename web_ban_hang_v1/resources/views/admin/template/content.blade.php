<div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                </div>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">
                                @if(Session::has('name_admin'))
                                    <script type="text/javascript">alert("Xin chào admin {{Session::get('name_admin')}}")</script>
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
            </div> <!-- end container -->
</div>