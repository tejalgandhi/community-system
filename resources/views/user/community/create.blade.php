@extends('layout.app_with_login')
@section('title','Home')
@section('content')
    <section class="content">
        @livewire('community.create',['question_id'=>$id])
    </section>
@endsection
@push('custom-scripts')

@endpush