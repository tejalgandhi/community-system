
<!DOCTYPE html>
<html>
<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('admin/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('admin/plugins/iCheck/square/blue.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

       <!-- <link rel="icon"  type="image/ico" sizes="16x16"> -->
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('admin/dist/img/favicon.png') }}">--}}
    <link rel="stylesheet" href="{{ url('admin/dist/css/custom.css') }}">

    @stack('custom-styles')
</head>
<body class="hold-transition login-page">
<!-- Use this Layout when user not Login -->

<div class="login-box">
{{--    <div class="login-logo">--}}
{{--        <img src="{{ url('admin/dist/img/crazy.png') }}" class="login-logo-img">--}}
{{--    </div>--}}
@yield('content')
<!-- /.login-box -->
</div>

<!-- jQuery 3 -->
<script src="{{ url('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ url('admin/plugins/iCheck/icheck.min.js') }}"></script>

<script
        src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
        integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
        crossorigin="anonymous"></script>


<script src="{{ url('admin/js/jquery.validate.js') }}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>


@stack('custom-scripts')
</body>
</html>