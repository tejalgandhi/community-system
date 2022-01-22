<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="@if(request()->routeIs('user.home')) active @endif"><a href="{{ route('user.home') }}">
                    <i class="fa fa-home"></i>
                    <span> Dashboard</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>