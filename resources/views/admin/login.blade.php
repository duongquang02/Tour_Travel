<!-- Tạo tệp Blade view resources/views/admin/login.blade.php -->

@if (session('error'))
<div id="error-message" class="alert alert-danger" style="display: none;">
    {{ session('error') }}
</div>
@endif
@if(session('success'))
<div class="alert alert-success" id="success-alert" role="alert">
    {{ session('success') }}
</div>
@endif
<!DOCTYPE HTML>
<html>
<head>
    <title>Quản trị viên đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css_admin/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{asset('css_admin/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('css_admin/morris.css')}}" type="text/css"/>
    <!-- Graph CSS -->
    <link href="{{asset('css_admin/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css_admin/jquery-ui.css')}}">
    <!-- jQuery -->
    <script src="{{asset('js_admin/jquery-2.1.4.min.js')}}"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{asset('css_admin/icon-font.min.css')}}" type='text/css' />
    <!-- //lined-icons -->
    <!-- Các thẻ meta, các tệp CSS, và các thư viện JavaScript tại đây -->
</head>
<body>
    <div class="main-wthree">
        <div class="container">
            <div class="sin-w3-agile">
                <h2>Đăng nhập</h2>
                <form method="post" action="{{ route('admin.login') }}">
                    @csrf
                    <div class="username">
                        <span class="username">Họ tên:</span>
                        <input type="text" name="name" class="name" placeholder="" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="password-agileits">
                        <span class="username">Mật khẩu:</span>
                        <input type="password" name="password" class="password" placeholder="" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="login-w3">
                        <input type="submit" class="login" name="login" value="Sign In">
                    </div>
                    <div class="clearfix"></div>
                </form>
                <div class="back">
                    <a href="{{ route('/') }}">Trở về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Hiển thị thông báo lỗi
            $('#error-message').show();

            // Ẩn thông báo sau 5 giây
            setTimeout(function () {
                $('#error-message').fadeOut('slow');
            }, 5000); // 5000 milliseconds = 5 seconds
            setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 5000);
        });// 5000 milliseconds (5 seconds)
    </script>
</body>
</html>
