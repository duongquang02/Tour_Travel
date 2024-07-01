<?php
error_reporting(0);
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
							<section>
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
												<form name="signup" method="POST" action="{{ route('signup') }}" >
                                            @csrf
													<h3>Tạo tài khoản của bạn </h3>
                                                        <input type="text" value="" placeholder="Họ tên" name="fname" autocomplete="off" required="">
                                                        <input type="text" value="" placeholder="Số điện thoại" maxlength="10" name="mobilenumber" autocomplete="off" required="">
		                                                <input type="text" value="" placeholder="Email" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">
		                                                <span id="user-availability-status" style="font-size:12px;"></span>
	                                                    <input type="password" value="" placeholder="Mật khẩu" name="password" required="">
													    <input type="submit" name="submit" id="submit" value="TẠO TÀI KHOẢN">
												</form>
											</div>
												<div class="clearfix"></div>
										</div>
                                        <p>Bằng cách đăng nhập, bạn đồng ý với chúng tôi <a href="{{ route('term') }}">Các điều khoản và điều kiện</a> và <a href="{{ route('privacy') }}">Chính sách bảo mật</a></p>
                                    </div>
								</div>
							</section>
					</div>
				</div>
			</div>
