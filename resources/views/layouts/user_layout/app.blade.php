
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

<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đặt tour trực tuyến</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <!-- Custom Theme files -->
        <script src= "{{asset('js/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!--animate-->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
        <script src="{{asset('js/wow.min.js')}}"></script>
            <script>
                 new WOW().init();
            </script>
        <!--//end-animate-->
    </head>
    <body>
        <header>
            <!-- Đặt phần header chung ở đây -->
            @include('includes.header')
        </header>
        <main>
            @yield('content')
        </main>

        <footer>
            @include('includes.footer')
            @include('includes.signin')
            @include('includes.signup')
            @include('includes.write-us')
        </footer>
    </body>
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

</html>
<?php

//session_destroy();
?>
