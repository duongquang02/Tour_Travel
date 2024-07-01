@extends('layouts.user_layout.app')

@section('content')
@include('package.detail.detail_script')
@include('includes.banner1')
<!--- contact ---->
<div class="contact">
	<div class="container">
	<h3> Xác nhận</h3>
		<div class="col-md-10 contact-left">
			<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                @if(Session::has('message'))
                <h4>{{ Session::get('message') }}</h4>
                 @endif
			</div>

			<div class="clearfix"></div>
	</div>
</div>
<!--- /contact ---->
@endsection
