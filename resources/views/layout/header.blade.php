
<header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-5 order-1 order-lg-1">
                            <div class="logo">
                                <a href="home">
                                    <img style="margin-left:-70px" src="images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-3 col-sm-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav style="margin-left: -50px" class="main__menu__nav d-none d-lg-block">
                                    <ul  class="mainmenu">
                                        <li class="drop"><a href="home">Trang chủ</a></li>
                                         <li class="drop"><a href="index.html">Đồ ăn</a></li>
                                                 <li class="drop"><a href="index.html">Thức uống</a></li>
                                                <li class="drop"><a href="index.html">Tin tức</a></li>   
                                      <li class="drop"><a href="index.html">Khuyến mãi</a></li> 
                                        <li><a href="contact.html">Liên hệ</a></li>
                                        @if(Auth::check()==false)
                                
                                <div class="log__in">
                                   <li class="drop"> <a class="accountbox-trigger" href="login">Đăng nhập</a></li>
                                </div>
                                       
                                         <li style="margin-right:-50px"><a href="register">Đăng kí</a>
                                          
                                        </li>
                                         @else 
                                
                                    
                                        <li class="drop"><i class="fas fa-user"></i>
                                            <ul class="dropdown__menu">
                                                <li><a href="profile/{{Auth::id()}}">Thông tin cá nhân</a></li>
                                                <li><a href="menu-details.html">Đăng kí mở cửa hàng</a></li>
                                                 <li><a href="logout">Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                    
                                
                                @endif
<form  style="margin-left: 70px;"class="form-inline d-inline-block">
  <input class="form-control " type="text" placeholder="Tìm kiếm" aria-label="Search">
 <a class="" href="#">
    <i class="fas fa-search"></i>
 </a>
</form>

                                      
                                    </ul>

                                </nav>
                                
                            </div>
                        </div>

                        <div class="col-lg-1 col-sm-2 col-md-2 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                 
                            
                    
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
                    <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                      @if(session('loi'))
                <div class="alert alert-danger">
                    {{session('loi')}}
                </div>
                @endif
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Đăng nhập</a>
                    </li>
                    
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="login" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                  
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- End Mainmenu Area -->
        </header>
        @section('scripts')
        <script>
             setTimeout(function() {
   
    $('.accountbox-wrapper').show();​​​​​​
}, 100);
 
        </script>
        @endsection