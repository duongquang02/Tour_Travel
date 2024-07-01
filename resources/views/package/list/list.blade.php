{{--  --}}
@extends('layouts.user_layout.app')

@section('content')
@include('includes.banner3')
<div class="rooms">
	<div class="container">
		<div class="room-bottom">
            <h3>Danh sách tour</h3>
            @php
                $listTourController = new \App\Http\Controllers\HomeController();
                $result = $listTourController->_getListTours('*');

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
                session(['result' => $result]);
                $index =0;
            @endphp
            @include('package.list.list_tour')
            {{--  --}}
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        @if($page>1)
                        <a class="page-link" href="{{ route('list_tour', ['page' => $page - 1]) }}"><</a>
                        @else
                        <a class="page-link" aria-disabled="true"><</a>
                        @endif
                    </li>

                    {{--  --}}
                    @for($i = 1; $i <= $pages; $i++)
                        <li class="page-item {{ ($i == $page) ? 'active' : '' }}">
                            <a class="page-link" href="{{ route('list_tour', ['page' => $i]) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    {{--  --}}
                    <li class="page-item">
                        @if($page<$pages)
                            <a class="page-link" href="{{ route('list_tour', ['page' => $page + 1]) }}">></a>
                        @else
                            <a class="page-link" aria-disabled="true">></a>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection

