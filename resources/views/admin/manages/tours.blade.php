@php
        $result = session('result');
          $tours=$result['tours'];
          $placeNames=$result['placeNames'];
          $index =0;
        @endphp
<div class="agile-grids">
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Quản lý gói tour</h2>
            <table id="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Loại</th>
                        <th>Vị trí</th>
                        <th>Giá</th>
                        <th>Ngày tạo</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                    <tr>
                        <td>{{ $tour->Tid }}</td>
                        <td>{{ $tour->name }}</td>
                        <td>{{ $tour->type }}</td>
                        <td>{{ $placeNames[$index]}}</td>
                        <td>{{ $tour->price }}VND</td>
                        <td>{{ $tour->creation_date}}</td>
                        <td>
                            {{-- <a href="{{ route('/', $tour->Tid) }}">
                                <button type="button" class="btn btn-primary btn-block">View Details</button>
                            </a> --}}
                        </td>
                    </tr>
                    @php
            $index++;
        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
