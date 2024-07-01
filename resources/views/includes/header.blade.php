@if(Auth::check())
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="{{ route('/') }}"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="{{ route('profile') }}">Thông tin của tôi</a></li>
            <li class="prnt"><a href="{{ route('change_password') }}">Đổi mật khẩu</a></li>
            <li class="prnt"><a href="{{ route('tour_history') }}">Lịch sử tour của tôi</a></li>
            <li class="prnt"><a href="{{ route('issue_tickets') }}">Phát hành vé</a></li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Welcome:</li>
            <li class="sig">{{ Auth::user()->Name }}</li>
            <li class="sigi"><a href="{{ route('logout') }}">Đăng xuất</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@else
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            {{-- <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li class="hm"><a href="admin/index.php">Admin Login</a></li> --}}
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal">Đăng ký |</a></li>
            <li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4">Đăng nhập</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
@endif


<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="{{ route('/') }}">Du lịch <span>Đặt tour trực tuyến</span></a>
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s">
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">AN TOÀN &amp; CHẮN CHẮN </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Chuyển đổi điều hướng</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="{{ route('/') }}">Trang chủ</a></li>
							<li><a href="{{ route('aboutus') }}">Về chúng tôi</a></li>
								<li><a href="{{ route('list_tour')}}">Tour</a></li>
								<li><a href="{{ route('contact')}}">Liên hệ</a></li>
								<?php if($_SESSION['login']){?>
								<li>Hỗ trợ?<a href="#" data-toggle="modal" data-target="#myModal3"> / Viết cho chúng tôi </a>  </li>
								<?php } else { ?>
								<li><a href="{{ route('enquiry')}}"> Yêu cầu </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
