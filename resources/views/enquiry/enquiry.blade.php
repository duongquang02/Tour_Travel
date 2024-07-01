@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
@php
    // $detailController = new \App\Http\Controllers\detailController();
    // $result=$detailController->__getTour($Tid);

@endphp
@include('enquiry.enquiry_form');
@endsection
