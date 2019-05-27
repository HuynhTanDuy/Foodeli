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
							<a style="color:white" class="accordion-head" >Thêm địa điểm cửa hàng bạn biết</a>
							
							<div class="accordion-body billing-method fix">
																			<div class="col-12 mb--20">


								<label>Những địa điểm yêu thích của bạn chưa có trên Foodeli? Chia sẻ với cộng đồng ngay!</label>
							</div>
								<form action="profile/{{Auth::id()}}/location-register" class="billing-form checkout-form" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="row">
										<div class="col-12 mb--20">
											<input type="text" name="nameLocation" value="" placeholder="Tên cửa hàng" >
										</div>
										<div class="col-12 mb--20">
												<select name="idLocation">
													<option value="0">Loại cửa hàng</option>
													<option value="1">Đồ ăn</option>
													<option value="2">Đồ uống</option>
													<option value="3">Đồ chay</option>
												</select>
											</div>
										
										<div class="col-12 mb--20">
												<select>
													<option value="10">Quận Thủ Đức</option>
													<option value="2">Quận 1</option>
													<option value="3">Quận 2</option>
													<option value="4">Quận 3</option>
													<option value="5">Quận 4</option>
													<option value="6">Quận 5</option>
													<option value="7">Quận 6</option>
													<option value="8">Quận 7</option>
													<option value="9">Quận 8</option>
													<option value="9">Quận 9</option>
												</select>
										</div>
											<div class="col-12 mb--20">
											<input type="text" name="addressLocation" value="" placeholder="Địa chỉ chi tiết">
										</div>
										<div class="col-12 mb--20">
											<input type="text" name="phone_numberLocation" value="" placeholder="Số điện thoại">
										</div>
										<div class="col-12 mb--20">
											<input type="text" name="emailLocation" value="" placeholder="Email">
										</div>
										<div class="col-12 mb--20">
											<input type="text" name="websiteLocation" value="" placeholder="Website">
										</div>
										<div class="col-12 mb--20">
											<textarea name="desLocation" style="width:800px" name="comment" placeholder="Mô tả"></textarea>
										</div>
											<div class="col-12 mb--20">
											<label >*Tôi chắc chắn cửa hàng này tồn tại và đã đọc <a href="home"><b> điều khoản quy định.</b></a></label>
											</div>
											<div class="col-12 mb--20">
												<button class="food__btn">Xác nhận</button>
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
@section('scripts')

<script>
    $(document).ready(function(){
        $("#changePass").change(function(){
        {
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
               
            }
            else {
                $(".password").attr('disabled','');
             
            }

        }
    });
    });
    </script>
@endsection