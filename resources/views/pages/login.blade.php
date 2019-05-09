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
               
 								<div class="single-accordion">
 									 @if(session('loi'))
                <div class="alert alert-danger">
                    {{session('loi')}}
                </div>
                @endif
                                        <a style="color:white" class="accordion-head" >Đăng nhập</a>
                                       
                                            
                                            <div class="accordion-body billing-method fix">

                                                <form action="login" class="billing-form checkout-form" method="POST">
                                                	<input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <div class="row">
                                                         <div class="col-12 mb--20">                              
                                                            <input type="text" name="email" placeholder="Email">
                                                        </div>
                                                        
                                                      
                                                         <div class="col-12 mb--20">                              
                                                            <input type="password" name="password" placeholder="Mật khẩu">
                                                        </div>
                                                         
                                                     
                                                       <div class="col-12 mb--20">
                                                       	 <button class="food__btn" type="submit">Đăng nhập</button>
                                                       	  <button class="food__btn inline-block" name="forgetPass" >Quên mật khẩu</button>
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
