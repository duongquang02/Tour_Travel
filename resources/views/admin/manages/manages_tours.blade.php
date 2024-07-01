@extends('layouts.admin_layout.app')

@section('content')
@php
    $admincontroller= new \App\Http\Controllers\AdminController();
    $result=$admincontroller->_getListTours('*');
    $tours=$result['tours'];
    $placeNames=$result['placeNames'];
    $perPage = 5;
    $totalTours = count($tours);
    $pages = ceil($totalTours / $perPage);

    $page = 1; // Đây là trang mặc định
    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $perPage;
    $visibleTours = $tours->slice($start, $perPage)->all();
    $result['tours']=$visibleTours;
    // Trong trang bạn đặt dữ liệu vào session
    session(['result' => $result]);
    $index =0;
@endphp
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i>Quản lý gói tour</li>
</ol>
<div class="agile-grids">
@include('admin.manages.tours')
</div>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            @if($page>1)
            <a class="page-link" href="{{ route('admin.manage.tours', ['page' => $page - 1]) }}"><</a>
            @else
            <a class="page-link" aria-disabled="true"><</a>
            @endif
        </li>

        {{--  --}}
        @for($i = 1; $i <= $pages; $i++)
            <li class="page-item {{ ($i == $page) ? 'active' : '' }}">
                <a class="page-link" href="{{ route('admin.manage.tours', ['page' => $i]) }}">{{ $i }}</a>
            </li>
        @endfor
        {{--  --}}
        <li class="page-item">
            @if($page<$pages)
                <a class="page-link" href="{{ route('admin.manage.tours', ['page' => $page + 1]) }}">></a>
            @else
                <a class="page-link" aria-disabled="true">></a>
            @endif
        </li>
    </ul>
</nav>
<script src="{{asset('js_admin/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js_admin/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('js_admin/bootstrap.min.js')}}"></script>
@endsection
