@extends('layout.index')
@section('content')
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--18">
	<div class="ht__bradcaump__wrap d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="bradcaump__inner text-center">
						<h2 class="bradcaump-title">Quản lí cửa hàng</h2>
						<nav class="bradcaump-inner">
							
							@if(count($errors)>0)
							<div class="alert alert-danger">
								@foreach ($errors->all() as $err)
								{{$err}} <br>
								@endforeach
							</div>
							@endif
							@if (session('annoucement'))
							<div class="alert alert-success">
								{{session('annoucement')}}
							</div>
							@endif
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<section class="htc__checkout bg--white section-padding--lg">
	<!-- Checkout Section Start-->
	<div class="checkout-section">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-12 mb-30">
					
					<!-- Checkout Accordion Start -->
					<div  id="checkout-accordion">
						
						
						
						<!-- Billing Method -->
						<div  class="single-accordion">
							<a  style="color:white"class="accordion-head" data-parent="#checkout-accordion" >Danh sách order</a>
							<div id="billing-method">
								<div class="accordion-body billing-method fix">
									<form action="location-management/" class="billing-form checkout-form" method="POST">
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<div class="row">
											
											<div class="col-12 mb--20">
												<table class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
														<tr align="center">
															
															<th>Người đặt hàng</th>
															<th>Món ăn</th>
															<th>Địa chỉ</th>
															<th>Số điện thoại</th>
															<th>Tổng giá</th>
															<th>Hoàn thành</th>
															<th>Hủy bỏ</th>
														</tr>
													</thead>
													<tbody>
														@foreach($order as $od)
														
														
														<tr class="odd gradeX" align="center">
															<td> {{$od->getUser->name}}  </td>
															
															<td> @foreach($cartbox_detail as $cd)
																{{$cd->getFood->name}} <br> @endforeach </td>
															<td>{{$od->address}}</td>
															<td>{{$od->getUser->phone_number}}</td>
															<td>{{$od->totalprice}}</td>
															
															
															<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="finishOrder/{{$od->getCartbox->id}}/{{$od->id}}">Hoàn thành</a></td>
															<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="cancelOrder/{{$od->getCartbox->id}}/{{$od->id}}">Hủy đơn hàng</a></td>
														</tr>
														@endforeach
													</tbody>
												</table>
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