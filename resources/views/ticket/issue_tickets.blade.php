@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')

<div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Phát hành vé</h3>
        @if(isset($error))
            <div class="errorWrap"><strong>LỖI</strong>: {{ $error }}</div>
        @elseif(isset($msg))
            <div class="succWrap"><strong>THÀNH CÔNG</strong>: {{ $msg }}</div>
        @endif
        <p>
            <table border="1" width="100%">
                <tr align="center">
                    <th>#</th>
                    <th>Mã vé</th>
                    <th>Mã người dùng</th>
                    <th>Mã tour</th>
                    <th>Vấn đề</th>
                    <th>Mô tả</th>
                    <th>Ghi chú của quản trị viên</th>
                    <th>Ngày đăng ký</th>
                    <th>Ngày ghi chú</th>
                </tr>
                @foreach($issues as $issue)
                <tr align="center">
                    <td>{{ $loop->iteration }}</td>
                    <td width="100">#TKT-{{ $issue->id }}</td>
                    <td>{{ $issue->Uid }}</td>
                    <td>{{ $issue->Tid }}</td>
                    <td>{{ $issue->Issue }}</td>
                    <td width="300">{{ $issue->Description }}</td>
                    <td>{{ $issue->AdminRemark }}</td>
                    <td width="100">{{ $issue->PostingDate }}</td>
                    <td width="100">{{ $issue->AdminremarkDate }}</td>
                </tr>
                @endforeach
            </table>
        </p>
    </div>
</div>

@endsection
