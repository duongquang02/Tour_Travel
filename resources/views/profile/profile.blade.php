@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
<!--- contact ---->
<!--- privacy ---->
<div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Profile</h3>
        <form name="chngpwd" method="post"action="{{route('update_profile')}}">
            @csrf
            <?php
            $user = Auth::user();
            // dd($user);
            if ($user) { ?>
                <p style="width: 350px;">
                    <b>Họ tên</b> <input type="text" name="name" value="<?php echo htmlentities($user->Name); ?>" class="form-control" id="name" required="">
                </p>
                <p style="width: 350px;">
                    <b>Số điện thoại</b>
                    <input type="text" class="form-control" name="mobileno" maxlength="10" value="<?php echo htmlentities($user->Phone_number); ?>" id="mobileno" required="">
                </p>
                <p style="width: 350px;">
                    <b>Email</b>
                    <input type="email" class="form-control" name="email" value="<?php echo htmlentities($user->Email); ?>" id="email" readonly>
                </p>
                <p style="width: 350px;">
                    <b>Cập nhật lần cuối: </b> <?php echo htmlentities($user->updated_at); ?>
                </p>
                <p style="width: 350px;">
                    <b>Ngày đăng ký</b> <?php echo htmlentities($user->created_at); ?>
                </p>
            <?php } ?>
            <p style="width: 350px;">
                <button type="submit" name="submit6" class="btn-primary btn">Cập nhật</button>
            </p>
        </form>
    </div>
</div>
<!--- /privacy ---->

<!--- /contact ---->
@endsection
