{{-- @extends('layouts.user_layout.app') --}}
@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner3')
@php
    $detailController = new \App\Http\Controllers\detailController();
    // $foundTour=$detailController->__getDetail($Tid);
    // $placeName=$detailController->__getPlaceName($Tid);
    $result=$detailController->__getTour($Tid);
@endphp
@include('package.detail.tour_infor',['tours'=>$result['tour'],'placeName'=>$result['placeName']])
@endsection

