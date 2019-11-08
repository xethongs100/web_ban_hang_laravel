<div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="#">
                                <i class="la la-cube"></i>Quản lý<div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route('lay-ds-product')}}">Product</a>
                                </li>
                                <li>
                                @if(Session::has('id_admin'))
                                    <a href="{{route('lay-ds-user',['id'=>Session::get('id_admin')])}}">User</a>
                                @endif
                                </li>                 
                            </ul>
                        </li>
                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
</div>