@extends('layout.app_without_login')
@section('title','Login')
@section('content')
    <div class="login-logo">
    </div>
    <div class="login-box-body"  >
        @include('errors.index')

        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('post.login') }}" method="post" id="loginForm" name="loginForm">
            {{ csrf_field() }}
            <div class="form-group has-feedback">

                <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="">

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div id="email_validate"></div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div id="password_validate"></div>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>

@endsection
@push('custom-scripts')

@endpush