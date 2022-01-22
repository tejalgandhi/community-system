<header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin.home')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">CJ</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
{{--                Crazy Jalapeno--}}
                <img src="{{ url('admin/dist/img/crazy.png') }}" class="login-logo-img">
     </span>

    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('admin/dist/img/user.png') }}" class=" user-image logo_img">
                        <span class="hidden-xs">
                        {{Auth::User()->first_name }}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url('admin/dist/img/user.png') }}" class="logo_img logo_img">
                            <p>
                                {{Auth::User()->first_name }}{{Auth::User()->last_name }}
                                <small>Super Admin</small>
                            </p>
                        </li>
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">

                                    <a href="{{ route('admin.change-password') }}" class="btn btn-default btn-flat">Change Password</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="{{ route('admin.profile') }}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Control Sidebar Toggle Button -->
                <!--  <li>
                   <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                 </li> -->
            </ul>
        </div>
    </nav>

    <!-- Header Navbar End -->
</header>