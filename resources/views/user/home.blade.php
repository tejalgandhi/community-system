@extends('layout.app_with_login')
@section('title','Home')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-md-3">

                <h3 class="box-title">Welcome {{\Illuminate\Support\Facades\Auth::user()->first_name}}!!</h3>
                <div class="box-tools pull-right">

                </div>


            </div>
        </div>
    </section>
@endsection
@push('custom-scripts')

@endpush