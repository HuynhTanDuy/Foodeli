@extends('layout.index')
@section('content')
<section class="htc__checkout bg--white section-padding--lg">
	<!-- Checkout Section Start-->
	<div class="checkout-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-12 mb-30">
					
					<!-- Checkout Accordion Start -->
					<div id="checkout-accordion">
						@if (count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}<br>
							@endforeach
						</div>
						@endif
						@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
						@endif
						<div class="single-accordion">
							<a style="color:white" class="accordion-head" >Thông tin cá nhân</a>
							
							<div class="accordion-body billing-method fix">
								<form action="profile" class="billing-form checkout-form" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="row">
										<div class="col-12 mb--20">
											<input type="text" name="name" value="{{$user->name}}" >
										</div>
										
										<div class="col-12 mb--20">
											<input type="email" name="email" value="{{$user->email}}" disabled>
										</div>
										<div class="col-12 mb--20 change-pass">
											
												<input  type="checkbox" class="form-check-input" value="">
												<label >Đổi mật khẩu</label>
											</div>
											<div class="col-12 mb--20 ">
												<input type="password" placeholder="Mật khẩu"  name="password" value="{{$user->password}}">
											</div>
											<div class="col-12 mb--20">
												<input type="password" name="password2" value="{{$user->password}}" placeholder="Xác nhận mật khẩu">
											</div>
											<div class="col-12 mb--20">
												<input value="{{$user->address}}"
												name="address" type="text" placeholder="Địa chỉ">
											</div>
											<div class="col-12 mb--20">
												<input value="{{$user->phone_number}}" name="phone_number" type="text"
												placeholder="Số điện thoại">
											</div>
											<div class="col-12 mb--20">
												<select>
													<option value="1">Quận Thủ Đức</option>
													<option value="2">Quận 1</option>
													<option value="3">Quận 2</option>
													<option value="4">Quận 3</option>
													<option value="5">Quận 4</option>
													<option value="6">Quận 5</option>
													<option value="7">Quận 6</option>
													<option value="8">Quận 7</option>
													<option value="9">Quận 8</option>
												</select>
											</div>
											<div class="col-12 mb--20">
												<button class="food__btn">Cập nhật</button>
											</div>
											
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection