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
<?php
session_start();
?>
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
</head>
<body>
    <div class="page-container">
        <div class="left-content">
            <header>
                @include('admin/includes.header')
            </header>
            <main>
                @yield('content')
            </main>

            <footer>
             @include('admin/includes.footer')
                <div class="left-content">
            </footer>
        </div>
    </div>
    @include('admin/includes.sidebarmenu')
    <!--js -->
    <script src="{{asset('js_admin/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('js_admin/scripts.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
       <script src="{{asset('js_admin/bootstrap.min.js')}}"></script>
       <!-- /Bootstrap Core JavaScript -->
    <!-- morris JavaScript -->
    <script src="{{asset('js_admin/raphael-min.js')}}"></script>
    <script src="{{asset('js_admin/morris.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('#error-message').show();

// Ẩn thông báo sau 5 giây
            setTimeout(function () {
                $('#error-message').fadeOut('slow');
            },5000); // 5000 milliseconds = 5 seconds
            setTimeout(function() {
                $('#success-alert').fadeOut('slow');
            }, 5000);
            //BOX BUTTON SHOW AND CLOSE
           jQuery('.small-graph-box').hover(function() {
              jQuery(this).find('.box-button').fadeIn('fast');
           }, function() {
              jQuery(this).find('.box-button').fadeOut('fast');
           });
           jQuery('.small-graph-box .box-close').click(function() {
              jQuery(this).closest('.small-graph-box').fadeOut(200);
              return false;
           });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }
            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
                data: [
                    {period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
                    {period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                    {period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                    {period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                    {period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                    {period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                    {period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                    {period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                    {period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                    {period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
                ],
                lineColors:['#ff4a43','#a2d200','#22beef'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
        </script>
</body>
</html>
