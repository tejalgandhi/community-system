<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="csrf-token" content="{{ @csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/AdminLTE.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="{{ url('admin/css/sweetalert2.min.css') }}">
{{--    @if(!request()->routeIs('company.flyer-management*'))--}}
    <link rel="stylesheet" href="{{ url('admin/plugins/jquery-ui/jquery-ui.css') }}">
{{--    @endif--}}
    <link rel="stylesheet" href="{{ url('admin/css/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ url('admin/dist/css/custom.css') }}">


    <link href="{{ url('admin/') }}/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('admin/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    <link rel="stylesheet" href="{{ url('admin/plugins/date-rangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ url('admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .alert a{
            text-decoration: none;
        }
        .alert{
            margin: 25px;
        }
    </style>
@stack('custom-styles')
</head>
<body class="skin-green hold-transition sidebar-mini">
<!-- Use this Layout when user Login -->
<div class="loader-outer-container" id="pageLoadingDiv" style=" display: none; ">
    <div class="laoder-inner-container">
        <div class="loader">
            <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
            <p class="loader-text" id="loadingText">Loading...</p>
        </div>
    </div>
</div>
<div class="overlay" style=" display: none; ">
    <i class="fa fa-refresh fa-spin"></i>
</div>

<div class="wrapper">

@include('layout.common.header')
<!-- Left side column. contains the logo and sidebar -->
@include('layout.common.sidebar')


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
{{--@if(!request()->routeIs('company.flyer-management*'))--}}
<script src="{{ url('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('admin/js/jquery-3.4.1.min.js') }}"></script>

<script src="{{ url('admin/plugins/jquery-migrate-3.0.0.min.js') }}"></script>

{{--@endif--}}

<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ url('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script type="text/javascript" src="{{ url('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ url('admin/plugins/date-rangepicker/daterangepicker.js')}}"></script>
<script src="{{ url('admin/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/dist/js/demo.js') }}"></script>
<script src="{{ url('admin/js/jquery.validate.js') }}"></script>
<script src="{{ url('admin/js/sweetalert2.min.js') }}"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.0/firebase.js"></script>
<script src="{{ url('admin/dist/js/additional-methods.js') }}"></script>

<script type="text/javascript" src="{{ url('admin/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ url('admin/') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('admin/') }}/plugins/datatables/jquery.dataTables.columnFilter.js"></script>
<script type="text/javascript" src="{{ url('admin/') }}/plugins/moment/moment.min.js"></script>
<script type="text/javascript" src="{{ url('admin/plugins/moment/moment-timezone.js') }}"></script>
<script type="text/javascript" src="{{ url('admin/plugins/date-rangepicker/daterangepicker.js') }}"></script>
<script src="{{ url('admin/js/toastr.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ url('admin/plugins/date-rangepicker/daterangepicker.css') }}" />
<script
        src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js') }}"
        iintegrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('admin/plugins/select2/select2.full.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

<script>
    var base_url = '{{ url('/') }}';

</script>
@stack('custom-scripts')
</body>
</html>
