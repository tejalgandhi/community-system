<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="@if(Request::url() == url('admin/home')) active @endif"><a href="{{ url('admin/home') }}">
                    <i class="fa fa-home"></i>
                    <span> Dashboard</span></a></li>

            <li class="@if( strpos( trim(Request::url()),trim(url('admin/users'))) !== false ) active @endif"><a
                        href="{{ url('admin/users') }}">
                    {{--                    <img src="{{ url('admin/dist/img/ic_menu_user_color.png') }}" class="active_menu_icon">--}}
                    <i class="fa fa-users"></i>
                    <span> Users</span></a></li>

            <li class="@if( strpos( trim(Request::url()),trim(url('admin/category'))) !== false ) active @endif"><a
                        href="{{ url('admin/category') }}">
                    <i class="fa fa-list-alt"> </i>
                    <span> Category</span></a></li>
            <li class="@if( strpos( trim(Request::url()),trim(url('admin/company'))) !== false ) active @endif"><a
                        href="{{ url('admin/company') }}">
                    <i class="fa fa-building-o"> </i>
{{--                    <span> Company Details</span>--}}
                    <span> Sub Admin</span>
                </a></li>
            <li class="@if(request()->routeIs('admin.product*')) active  @endif"><a href="{{ url('admin/product') }}">
                    <i class="fa fa-th"></i>
                    <span> Products</span></a></li>
            <li class="@if(request()->routeIs('admin.flyers*')) active  @endif"><a href="{{ url('admin/flyers') }}">
                    <i class="fa fa-th"></i>
                    <span> Flyers</span></a></li>
{{--            <li class="@if(request()->routeIs('admin.flyer-items*')) active  @endif"><a href="{{ url('admin/flyer-items') }}">--}}
{{--                    <i class="fa fa-th"></i>--}}
{{--                    <span> Flyer Items</span></a></li>--}}
            <li class="@if(request()->routeIs('admin.banner*')) active  @endif"><a href="{{ url('admin/banner') }}">
                    <i class="fa fa-th"></i>
                    <span> Banners</span></a></li>

            <li class="@if(request()->routeIs('admin.coupon*')) active  @endif"><a href="{{ url('admin/coupon') }}">
                    <i class="fa fa-th"></i>
                    <span> Coupons</span></a></li>
            <li class="@if(request()->routeIs('admin.event*')) active  @endif"><a href="{{ url('admin/event') }}">
                    <i class="fa fa-calendar "></i>
                    <span> Events</span></a></li>
            <li class="@if(request()->routeIs('admin.magazine*')) active  @endif"><a href="{{ url('admin/magazine') }}">
                    <i class="fa fa-newspaper-o"></i>
                    <span> Magazine Management</span></a>
            </li>
            <li class="@if(request()->routeIs('admin.postal-code-group-master*')) active  @endif"><a href="{{ url('admin/postal-code-group-master') }}">
                    <i class="fa fa-newspaper-o"></i>
                    <span> Postal Code Group Management</span></a>
            </li>
            <li class="treeview @if(request()->routeIs('admin.reports*')) active  @endif" >
                <a href="#">
                    <i class="fa fa-file"></i> <span>Reports</span>
                    <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="@if(request()->routeIs('admin.reports.download-report*')) active  @endif">
                        <a href="{{route('admin.reports.download-report')}}">
                            <i class="fa fa-download"></i> Signup/Download Report</a>
                    </li>
                    <li class="@if(request()->routeIs('admin.reports.flyer-views-report*')) active  @endif">
                        <a href="{{route('admin.reports.flyer-views-report')}}">
                            <i class="fa fa-eye"></i> Flyer Views Report</a>
                    </li>
                    <li class="@if(request()->routeIs('admin.reports.shopping-list-report*')) active  @endif">
                        <a href="{{route('admin.reports.shopping-list-report')}}">
                            <i class="fa fa-shopping-cart"></i> Shopping List Report</a>
                    </li>
                    <li class="@if(request()->routeIs('admin.reports.coupon_list_report*')) active  @endif">
                        <a href="{{route('admin.reports.coupon_list_report')}}">
                            <i class="fa fa-gift "></i> Coupon List Report</a>
                    </li>
                </ul>
            </li>
            <li class="treeview @if(request()->routeIs('admin.cms*')||request()->routeIs('admin.introduction*') || request()->routeIs('company.notification-master*')||
            request()->routeIs('admin.unit*') ||request()->routeIs('admin.postal-code-master*')||request()->routeIs('admin.country-master*')) active  @endif" >
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Settings</span>
                    <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                     </span>
                </a>
                <ul class="treeview-menu ">
                    <li class="@if(request()->routeIs('admin.cms*')) active  @endif"><a href="{{route('admin.cms.index')}}"><i class="fa fa-desktop"></i> CMS</a></li>
                    <li class="@if(request()->routeIs('admin.introduction*')) active  @endif"><a href="{{route('admin.introduction.index')}}"><i class="fa fa-desktop"></i> Introduction Management</a></li>
                    <li class="@if(request()->routeIs('admin.unit*')) active  @endif"><a href="{{route('admin.unit.index')}}"><i class="fa fa-balance-scale"></i> Unit</a></li>
                    <li class="@if(request()->routeIs('admin.country-master*')) active  @endif"><a href="{{route('admin.country-master.index')}}"><i class="fa fa-th"></i> Country Management</a></li>
                    <li class="@if(request()->routeIs('admin.postal-code-master*')) active  @endif"><a href="{{route('admin.postal-code-master.index')}}"><i class="fa fa-th"></i> Postal code Management</a></li>
                    <li class="@if(request()->routeIs('admin.notification-master*')) active  @endif"><a href="{{route('admin.notification-master.index')}}"><i class="fa fa-th"></i> Notification Management</a></li>

                </ul>
            </li>

        </ul>

    </section>
    <!-- /.sidebar -->
</aside>