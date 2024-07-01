<div class="container">
    <div class="holiday">
        @php
        $listTourController = new \App\Http\Controllers\HomeController();
        $result = $listTourController->_getListTours(1);
        session(['result' => $result]);
        @endphp
        <h3>Danh sách tour</h3>
        @include('package.list.list_tour',['result'=>$result])
    <div><a href="{{ route('list_tour') }}" class="view">Xem thêm tour</a></div>
    <div class="clearfix"></div>
</div>
