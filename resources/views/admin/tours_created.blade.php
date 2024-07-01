@extends('layouts.admin_layout.app')

@section('content')
<div class="container">
    <h3>Tạo gói tour</h3>

    <form method="POST" action="/create-package" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="packagename">Tên gói tour</label>
            <input type="text" class="form-control" id="packagename" name="packagename" required>
        </div>
        <div class="form-group">
            <label for="packagetype">Loại gói tour</label>
            <input type="text" class="form-control" id="packagetype" name="packagetype" required>
        </div>
        <div class="form-group">
            <label for="packagelocation">Vị trí gói tour</label>
            <input type="number" class="form-control" id="packagelocation" name="packagelocation" required>
        </div>
        <div class="form-group">
            <label for="packageprice">Giá gói tour</label>
            <input type="text" class="form-control" id="packageprice" name="packageprice" required>
        </div>
        <div class="form-group">
            <label for="packagedetails">Chi tiết gói tour</label>
            <input type="text" class="form-control" id="packagedetails" name="packagedetails" required>
        </div>
        <div class="form-group">
            <label for="date_start">Ngày bắt đầu</label>
            <input type="date" class="form-control" id="date_start" name="date_start" required>
        </div>
        <div class="form-group">
            <label for="date_end">Ngày kết thúc</label>
            <input type="date" class="form-control" id="date_end" name="date_end" required>
        </div>
        <div class="form-group">
            <label for="total_member">Số lượng tối đa</label>
            <input type="number" class="form-control" id="total_member" name="total_member" required>
        </div>
        <!-- Add other form fields here -->
        <div class="form-group">
            <label for="packageimage">Ảnh gói tour</label>
            <input type="file" class="form-control-file" id="packageimage" name="packageimage" required>
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>
    </form>
</div>
@endsection
