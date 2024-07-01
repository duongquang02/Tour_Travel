{{-- @extends('layouts.user_layout.app') --}}
@extends('layouts.admin_layout.app')

@section('content')
<div class="four-grids">
    <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
            <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Đặt tour</h3>
                <h4>{{ $bookingCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
            <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Vấn đề</h3>
                <h4>{{ $issueCount }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
            <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Gói tour</h3>
                <h4>{{ $packageCount }}</h4>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="inner-block">
    <!-- Thêm nội dung bổ sung cho trang dashboard của bạn ở đây -->
</div>
@endsection

