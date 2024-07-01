        @php
        $result = session('result');
          $tours=$result['tours'];
          $placeNames=$result['placeNames'];
          $index =0;
        @endphp
        @foreach($tours as $tour)
        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $tour->name }}</h4>
                <h6>Loại tour: {{ $tour->detail }}</h6>
                <p><b>Địa điểm tham quan:</b> {{ $placeNames[$index]}}
                    <br><b>Ngày bắt đầu: </b>{{ $tour->date_start }}
                    <br><b>Ngày kết thúc: </b>{{ $tour->date_end }}
                    <br><b>Số lượng người tối đa: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $tour->name }}</h4>
                <h6>Loại tour: {{ $tour->detail }}</h6>
                <p><b>Địa điểm tham quan:</b> {{ $placeNames[$index]}}
                    <br><b>Ngày bắt đầu: </b>{{ $tour->date_start }}
                    <br><b>Ngày kết thúc: </b>{{ $tour->date_end }}
                    <br><b>Số lượng người tối đa: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $tour->name }}</h4>
                <h6>Loại tour: {{ $tour->detail }}</h6>
                <p><b>Địa điểm tham quan:</b> {{ $placeNames[$index]}}
                    <br><b>Ngày bắt đầu: </b>{{ $tour->date_start }}
                    <br><b>Ngày kết thúc: </b>{{ $tour->date_end }}
                    <br><b>Số lượng người tối đa: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $tour->name }}</h4>
                <h6>Loại tour: {{ $tour->detail }}</h6>
                <p><b>Địa điểm tham quan:</b> {{ $placeNames[$index]}}
                    <br><b>Ngày bắt đầu: </b>{{ $tour->date_start }}
                    <br><b>Ngày kết thúc: </b>{{ $tour->date_end }}
                    <br><b>Số lượng người tối đa: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="data:image/jpeg;base64,{{ base64_encode($tour->tour_image) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $tour->name }}</h4>
                <h6>Loại tour: {{ $tour->detail }}</h6>
                <p><b>Địa điểm tham quan:</b> {{ $placeNames[$index]}}
                    <br><b>Ngày bắt đầu: </b>{{ $tour->date_start }}
                    <br><b>Ngày kết thúc: </b>{{ $tour->date_end }}
                    <br><b>Số lượng người tối đa: </b>{{ $tour->total_member }}
                </p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>{{ $tour->price }} VND</h5>
                <a href="{{ route('details',['Tid' => $tour->Tid]) }}" class="view">Chi tiết</a>
            </div>
            <div class="clearfix"></div>
        </div>

        
        @php
            $index++;
        @endphp
    @endforeach
    </div>
