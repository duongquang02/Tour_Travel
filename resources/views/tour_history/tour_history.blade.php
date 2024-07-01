@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
<!--- contact ---->
@php
$ucontrolller=new \App\Http\Controllers\UsersController();
$bookings=$ucontrolller->__getHistory();
@endphp
<table border="1" width="100%">
    <tr align="center">
        <th>#</th>
        <th>Mã tour</th>
        <th>Tên gói</th>
        <th>Đến</th>
        <th>Từ</th>
        <th>Bình luận</th>
        <th>Trạng thái</th>
        <th>Ngày đặt tour</th>
        <th>Hoạt động</th>
    </tr>
    @foreach ($bookings as $booking)
    <tr align="center">
        <td>{{ $loop->iteration }}</td>
        <td>#BK{{ $booking->BTid }}</td>
        <td><a href="{{ route('list_tour', ['Tid' => $booking->Tid]) }}">{{ $booking->name }}</a></td>
        <td>{{ $booking->date_start }}</td>
        <td>{{ $booking->date_end }}</td>
        <td>{{ $booking->comment }}</td>
        <td>
            @if ($booking->status == 0)
                Đang chờ
            @elseif ($booking->status == 1)
                Đã xác nhận
            @elseif ($booking->status == 2 && $booking->cancelby == 'u')
                Bạn đã hủy vào lúc {{ $booking->updated_at }}
            @elseif ($booking->status == 2 && $booking->cancelby == 'a')
                Đã bị quản trị viên hủy vào lúc {{ $booking->updated_at }}
            @endif
        </td>
        <td>{{ $booking->created_at }}</td>
        @if ($booking->status == 2)
        <td>Đã hủy</td>
        @else
        <td>
            <form action="{{ route('cancel_booking', ['BTid' => $booking->BTid]) }}" method="post">
                @csrf <!-- Sử dụng @csrf để bảo vệ khỏi Cross-Site Request Forgery (CSRF) -->

                <button type="submit" onclick="return confirm('Do you really want to cancel booking')" class="btn-cancel">Hủy</button>
            </form>
        </td>
        @endif
    </tr>
    @endforeach
</table>

<!--- /contact ---->
@endsection
