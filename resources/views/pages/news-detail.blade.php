@extends('layout.index-detail')
@section('content')
	
       
        <!-- Start Blog List View Area -->
        <section class="blog__details__wrapper section-padding--lg blog-details-page bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="blog__details__container">
                            <div class="bl__details__content">
                                <span>Category : Pasta</span>
                                  <h2>{{$news->tittle}}</h2>
                                  <p><b>{{$news->summary}}</b></p>
                              </div>
                            <div class="bl__dtl__thumb">
                                <img style=" height:300px"src="images/news/{{$news->images}}" alt="big images">
                            </div>
                            <div class="bl__dtl__postmeta d-flex justify-content-between">
                                <ul class="bl__meta d-flex align-items-center">
                                    <li><i class="fa fa-user-o"></i>Posted By: <a href="#">Admin</a></li>
                                    <li><i class="fa fa-calendar-o"></i>February  13,  2018</li>
                                </ul>
                                <ul class="bl__like__comment d-flex">
                                    <li><a href="#"><i class="fa fa-heart-o"></i>07</a></li>
                                </ul>
                            </div>
                            <!-- Start Blog Details -->
                            <div class="bl__details__inner">
                                <div class="bl__details__content">
                                   
                                    <p>{{$news->content}}</p>
                                    
                                        
                                    </div>
                                </div>
                                <!-- Start Blog Author -->
                                <div class="blog__author">
                                    <h2 class="blog__title">Tác giả</h2>
                                    <div class="food__author d-flex flex-wrap flex-lg-nowrap flex-md-nowrap">
                                        <div class="author__thumb">
                                            <img src="images/blog/details/5.jpg" alt="author images">
                                        </div>
                                        <div class="author__details">
                                            <h2><a href="#">Robart Hanson</a></h2>
                                            <div class="author__meta d-flex justify-content-between">
                                                <span>Admin - February  13,  2018</span>
                                                <ul class="rating d-flex">
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adip icinelit,tdom ineiusd tempor incididunt ut labore et dolore magna aliqua. Ut e veniam, nostrud exercitation ullamco laboris nisi ut aliquiconsequat.</p>
                                            <ul class="author__link d-flex">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Author -->
                                <!-- Start latest Blog -->
<div class="blog__latest__post mb--50">
                                    <h2 class="blog__title">Tin tức mới nhất</h2>
                                    <div class="blog__lst__post__wrapper">
                                        <!-- Start Single Post -->
                                        @foreach($latestNews as $ln)
                                        <div class="latest__post__inner">
                                            <div class="latest__post__thumb">
                                                <a href="#">
                                                    <img style="height:200px;"src="images/news/{{$ln->images}}" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="latest__inner">
                                                <h6><a href="blog-details.html">{{$ln->tittle}}</a></h6>
                                            </div>
                                            <div class="post__hover__inner">
                                                <div class="post__hover__action">
                                                    <h6><a href="blog.details.html">CHicken Fry</a></h6>
                                                    <span>1st Oct, 2o17</span>
                                                    <p>{{$ln->summary}}</p>
                                                    <div class="bl__btn">
                                                        <a class="food__btn" href="blog-details.html">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End Single Post -->
                                        <!-- Start Single Post -->
                                   
                                        <!-- End Single Post -->
                                        <!-- Start Single Post -->
                                        
                                        <!-- End Single Post -->
                                    </div>
</div>
                                <!-- End latest Blog -->
                                <!-- Start Blog Comment -->
                              
                                <!-- End Blog Comment -->
                                <!-- Start Comment Form -->
                              
                                <!-- End Comment Form -->
</div>
                            <!-- End Blog Details -->
            </div>
                  
                    <div class="col-lg-4 col-md-12 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="food__sidebar">
                           
                            <!-- Start Search Area -->
                            <div class="food__search mt--60">
                                <h4 class="side__title">Tìm kiếm</h4>
                                <div class="serch__box">
                                    <input type="text" placeholder="Nhập từ khóa">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <!-- End Search Area -->
                            <!-- Start Recent Post -->
                            <div class="food__recent__post mt--60">
                                <h4 class="side__title">Bài viết liên quan</h4>
                                <div class="recent__post__wrap">
                                    <!-- Start Single Post -->
                                    @foreach($relatedNews as $rn)
                                    <div class="single__recent__post d-flex">
                                        <div class="recent__post__thumb">
                                            <a href="blog-details.html">
                                                <img style="height:100px; width:100px" src="images/news/{{$rn->images}}" alt="post images">
                                            </a>
                                        </div>
                                        <div class="recent__post__details">
                                            <span>February  13,  2018</span>
                                            <h4><a href="blog-details.html">{{$rn->tittle}}</a></h4>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                   
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                   
                                    <!-- End Single Post -->
                                    <!-- Start Single Post -->
                                    
                                    <!-- End Single Post -->
                                </div>
                            </div>
                            <!-- End Recent Post -->
                            <!-- Start Category Area -->
                           
                            <!-- End Category Area -->
                            <!-- Start Recent Comment -->
                           
                            <!-- End Recent Comment -->
                            <!-- Start Sidebar Contact -->
                            <div class="sidebar__contact mt--60">
                                <div class="sidebar__thumb">
                                    <img src="images/blog/sidebar/2.jpg" alt="sidebar images">
                                </div>
                                <div class="sidebar__details">
                                    <h4>colorful</h4>
                                    <h2>donut’s</h2>
                                    <span>get it till the stock full</span>
                                </div>
                                <div class="sidebar__con__btn">
                                    <a href="#">Contact Now<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- End Sidebar Contact -->
                            <!-- Start Sidebar Newsletter -->
                            <div class="sidebar__newsletter mt--60">
                                <h4 class="side__title">Newsletter</h4>
                                <div class="sidebar__inbox">
                                    <input type="text" placeholder="Enter your E-mail">
                                    <a href="#"><i class="fa fa-paper-plane"></i></a>
                                </div>
                            </div>
                            <!-- End Sidebar Newsletter -->
                            <!-- Start Sidebar Instagram -->
                            <div class="sidebar__instagram mt--60">
                                <h4 class="side__title">Instagram</h4>
                                <ul class="instagram__list d-flex flex-wrap">
                                    <li><a href="#"><img src="images/blog/instagram/1.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="images/blog/instagram/2.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="images/blog/instagram/3.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="images/blog/instagram/4.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="images/blog/instagram/5.jpg" alt="instagram images"></a></li>
                                    <li><a href="#"><img src="images/blog/instagram/6.jpg" alt="instagram images"></a></li>
                                </ul>
                            </div>
                            <!-- End Sidebar Instagram -->
                            <!-- Start twitter Feed -->
                           
                            <!-- End twitter Feed -->
                            <!-- Start Sicial NEt -->
                            <div class="sidebar__social__net mt--60">
                                <h4 class="side__title">Social Network</h4>
                                <ul class="var__social__net">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Sicial NEt -->
                            <!-- Start Tag Area -->
                            <div class="food__tag mt--60">
                                <h4 class="side__title">Tags</h4>
                                <ul class="tag__list d-flex flex-wrap">
                                    <li><a href="#">Pizza</a></li>
                                    <li><a href="#">Chicken</a></li>
                                    <li><a href="#">Adobe</a></li>
                                    <li><a href="#">Beef Swarma</a></li>
                                    <li><a href="#">Pasta</a></li>
                                    <li><a href="#">Burger</a></li>
                                </ul>
                            </div>
                            <!-- End Tag Area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
   
        <!-- End Blog List View Area -->
        <!-- Start Footer Area -->
     
        <!-- End Footer Area -->
        <!-- Login Form -->
       
            <!-- Cartbox -->
    
	<!-- //Main wrapper -->
@endsection
	<!-- JS Files -->
	
