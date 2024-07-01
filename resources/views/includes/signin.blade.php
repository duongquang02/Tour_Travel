@php
error_reporting(0);
@endphp
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
										<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>

												</ul>
											</div>
									<div class="login-right">
										<form method="POST" action="{{ route('signin') }}">
                                            @csrf
											<h3>Đăng nhập bằng tài khoản của bạn </h3>
	                                            <input type="text" name="email" id="email" placeholder="Email"  required="">
	                                            <input type="password" name="password" id="password" placeholder="Mật khẩu" value="" required="">
											    <h4><a href="{{ route('change_password') }}">Quên mật khẩu</a></h4>
											<input type="submit" name="signin" value="ĐĂNG NHẬP">
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Bằng cách đăng nhập, bạn đồng ý với chúng tôi <a href="{{ route('term') }}">Các điều khoản và điều kiện</a> và <a href="{{ route('privacy') }}">Chính sách bảo mật</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
