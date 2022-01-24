@extends('layout.app_with_login')
@section('title','Community Management')
@section('content')
    <section class="content">
        @livewire('community.index')
    </section>


@endsection
@push('custom-scripts')

@endpush