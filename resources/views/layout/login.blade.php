		<!-- Login Form -->
		<div class="accountbox-wrapper">
			<div class="accountbox text-left">
				<ul class="nav accountbox__filters" id="myTab" role="tablist">
					 @if(count($errors)>0)
                <div class="alert alert-danger">
                    {{session('annouce')}}
                </div>
                @endif
					<li>
						<a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Đăng nhập</a>
					</li>
					<li>
						<a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đăng kí</a>
					</li>
				</ul>
				<div class="accountbox__inner tab-content" id="myTabContent">
					<div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
						<form action="login" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="single-input">
								<input class="cr-round--lg" name="email" type="text" placeholder="Email">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" name="password" type="password" placeholder="Mật khẩu">
							</div>
							<div class="single-input">
								<button type="submit" class="food__btn"><span>Đăng nhập</span></button>
							</div>
							<div class="accountbox-login__others">
								<h6>Hoặc đăng nhập với</h6>
								<div class="social-icons">
									<ul>
										<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
					<div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<form action="signup" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="single-input">
								<input class="cr-round--lg" name="name" type="text" placeholder="Họ tên">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" name="email" type="email" placeholder="Địa chỉ email">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" name="password" type="password" placeholder="Mật khẩu">
							</div>
							<div class="single-input">
								<input class="cr-round--lg" name="password2" type="password" placeholder="Xác nhận mật khẩu">
							</div>
							<div class="single-input">
								<button type="submit" class="food__btn"><span>Đăng kí</span></button>
							</div>
						</form>
					</div>
					<span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
				</div>
			</div>
		</div><!-- //Login Form -->