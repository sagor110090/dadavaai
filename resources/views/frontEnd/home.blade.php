@extends('frontEnd.layouts.app')

@section('content')

	<!-- slider area start -->
    <div class="sloder-area">
        <div id="slider-active">
            @foreach($sliders as $slider)
                        <img src="{{asset('storage/images/slider/'.$slider->image)}}" alt="" title="#active1"  />
                        @endforeach
        </div>
        <div id="active1" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 hidden-xs ">
                        <div class="slide1-text text-left">
                            <div class="middle-text">
                                <div class="cap-sub-title animated">
                                    <h3>Welcome to market </h3>
                                </div>	
                                <div class="cap-title animated text-uppercase">
                                    <h1>Rayed Bravia KDL </h1>
                                </div>
                                <div class="cap-dec animated">
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem<br/> consuetudium lectorum.   </p>
                                </div>
                                <div class="cap-readmore animated">
                                    <a href="#">View Collection</a>
                                </div>	
                            </div>		
                        </div>				
                    </div>
                </div>
            </div>
            <div class="slider-progress"></div>	
        </div>
        <div id="active2" class="nivo-html-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 hidden-xs">
                        <div class="slide1-text text-left">
                            <div class="middle-text">
                                <div class="cap-sub-title animated">
                                    <h3>Welcome to market </h3>
                                </div>	
                                <div class="cap-title animated text-uppercase">
                                    <h1>Rayed Bravia KDL </h1>
                                </div>
                                <div class="cap-dec animated">
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem<br/> consuetudium lectorum.   </p>
                                </div>
                                <div class="cap-readmore animated">
                                    <a href="#">View Collection</a>
                                </div>	
                            </div>	
                        </div>				
                    </div>
                </div>
            </div>
            <div class="slider-progress"></div>	
        </div>
    </div>
    <!-- slider area end -->
    <!-- product area start -->
    <div class="product-area ptb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                    <div class="product box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>best selling</h3>
                        </div>
                        <div class="product-active left-right-angle">
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/1.jpg" alt="" class="primary"/>
                                        <img src="img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Nam fringilla augue</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.jpg" alt="" class="primary"/>
                                        <img src="img/product/4.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/5.jpg" alt="" class="primary"/>
                                        <img src="img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Nam fringilla augue</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/7.jpg" alt="" class="primary"/>
                                        <img src="img/product/8.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Nam fringilla augue</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/1.jpg" alt="" class="primary"/>
                                        <img src="img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper bl">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/5.jpg" alt="" class="primary"/>
                                        <img src="img/product/6.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon c-fff hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Nam fringilla augue</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
    <!-- banner-area start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                    <div class="single-banner">
                        <a href="#">
                            <img src="img/banner/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-banner">
                        <a href="#">
                            <img src="img/banner/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
                    <div class="single-banner">
                        <a href="#">
                            <img src="img/banner/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-area end -->
    <!-- all-product-area start -->
    <div class="all-product-area mtb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="latest-deals box-shadow mb-35 bg-fff">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product-title bg-2 text-uppercase">
                                    <i class="fa fa-history icon bg-3"></i>
                                    <h3>latest deals</h3>
                                </div>
                            </div>
                        </div>
                        <div class="latest-deals-active">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/1.jpg" alt="" class="primary"/>
                                        <img src="img/product/2.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                    <div class="deal-count">
                                        <div class="timer">
                                            <div data-countdown="2017/06/01"></div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/6.jpg" alt="" class="primary"/>
                                        <img src="img/product/3.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                    <div class="deal-count">
                                        <div class="timer">
                                            <div data-countdown="2017/06/01"></div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="img/product/3.jpg" alt="" class="primary"/>
                                        <img src="img/product/5.jpg" alt="" class="secondary"/>
                                    </a>
                                    <div class="product-icon hover-bg">
                                        <ul>
                                            <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                    <span class="sale">Sale</span>
                                    <div class="deal-count">
                                        <div class="timer">
                                            <div data-countdown="2017/06/01"></div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="#">Adipiscing cursus eu</a></h3>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>&300.00</span>
                                </div>
                            </div>							
                        </div>
                    </div>
                    <!-- featured-area start -->
                    <div class="featured-area box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>featured</h3>
                        </div>
                        <div class="feautred-active right left-right-angle">
                            <div class="featured-wrapper">
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="" class="primary"/>
                                            <img src="img/product/2.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="" class="primary"/>
                                            <img src="img/product/4.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-wrapper">
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="" class="primary"/>
                                            <img src="img/product/2.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="" class="primary"/>
                                            <img src="img/product/4.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-wrapper">
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="" class="primary"/>
                                            <img src="img/product/2.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="" class="primary"/>
                                            <img src="img/product/4.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-wrapper">
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="" class="primary"/>
                                            <img src="img/product/2.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="" class="primary"/>
                                            <img src="img/product/4.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper single-featured mtb-15">
                                    <div class="product-img floatleft">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                    </div>
                                    <div class="product-content floatright">
                                        <h3><a href="#">Duis convallis</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featured-area end -->
                    <!-- testimonils-area start -->
                    <div class="testimonils-area box-shadow mtb-35 bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-star-o icon bg-4"></i>
                            <h3>TESTIMONIALS</h3>
                        </div>
                        <div class="feautred-active right left-right-angle">
                            <div class="single-testimonil clear">
                                <div class="testimonil-content p mtb-25">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
                                </div>
                                <div class="test-img floatleft">
                                    <img src="img/test/2.jpg" alt="">
                                </div>
                                <div class="test-info">
                                    <h6>Kaji Hasibur Rahman</h6>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                            <div class="single-testimonil clear">
                                <div class="testimonil-content p mtb-25">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
                                </div>
                                <div class="test-img floatleft">
                                    <img src="img/test/1.jpg" alt="">
                                </div>
                                <div class="test-info">
                                    <h6>Lorem ipsum</h6>
                                    <span>CEO of WooThemes</span>
                                </div>
                            </div>
                            <div class="single-testimonil clear">
                                <div class="testimonil-content p mtb-25">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim…</p>
                                </div>
                                <div class="test-img floatleft">
                                    <img src="img/test/1.jpg" alt="">
                                </div>
                                <div class="test-info">
                                    <h6>Lorem ipsum</h6>
                                    <span>CEO of WooThemes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonils-area end -->
                    <!-- blog-area start -->
                    <div class="blog-area box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-comments-o icon bg-4"></i>
                            <h3>LATEST BLOG</h3>
                        </div>
                        <div class="feautred-active right left-right-angle">
                            <div class="blog-wrapper">
                                <div class="blog-img mtb-30">
                                    <a href="#">
                                        <img src="img/blog/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">hello world</a></h3>
                                    <div class="blog-meta">
                                        <span>April 18, 2016</span>
                                        <span>0 Comment(s)</span>
                                    </div>
                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
                                </div>
                            </div>
                            <div class="blog-wrapper">
                                <div class="blog-img mtb-30">
                                    <a href="#">
                                        <img src="img/blog/2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">hello world</a></h3>
                                    <div class="blog-meta">
                                        <span>April 18, 2016</span>
                                        <span>0 Comment(s)</span>
                                    </div>
                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
                                </div>
                            </div>
                            <div class="blog-wrapper">
                                <div class="blog-img mtb-30">
                                    <a href="#">
                                        <img src="img/blog/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">hello world</a></h3>
                                    <div class="blog-meta">
                                        <span>April 18, 2016</span>
                                        <span>0 Comment(s)</span>
                                    </div>
                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
                                </div>
                            </div>
                            <div class="blog-wrapper">
                                <div class="blog-img mtb-30">
                                    <a href="#">
                                        <img src="img/blog/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">hello world</a></h3>
                                    <div class="blog-meta">
                                        <span>April 18, 2016</span>
                                        <span>0 Comment(s)</span>
                                    </div>
                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
                                </div>
                            </div>
                            <div class="blog-wrapper">
                                <div class="blog-img mtb-30">
                                    <a href="#">
                                        <img src="img/blog/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="#">hello world</a></h3>
                                    <div class="blog-meta">
                                        <span>April 18, 2016</span>
                                        <span>0 Comment(s)</span>
                                    </div>
                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!Aenean posuere libero eu augue condimentum rhoncus. Praesent …</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog-area end -->	
                    <!-- newsletter-area start -->
                    <div class="newsletter-area box-shadow mt-35 bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-envelope-o icon bg-4"></i>
                            <h3>NEWSLETTER SIGN UP</h3>
                        </div>
                        <div class="newsletter form-style plbr-15">
                            <p>  Submit your mail to get events </p>
                            <form action="#">
                                <input type="email" placeholder="Email"/>
                                <button><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- newsletter-area start -->
                </div>
                <!-- product-area start -->
                <div class="col-lg-9  col-md-9 col-sm-12 col-xs-12">
                    <div class="product box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-paper-plane-o icon bg-4"></i>
                            <h3>New Products</h3>
                        </div>
                        <div class="new-product-active left left-right-angle">
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/11.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/15.jpg" alt="" class="primary"/>
                                            <img src="img/product/13.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/9.jpg" alt="" class="primary"/>
                                            <img src="img/product/5.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="" class="primary"/>
                                            <img src="img/product/2.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="" class="primary"/>
                                            <img src="img/product/4.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/5.jpg" alt="" class="primary"/>
                                            <img src="img/product/6.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/7.jpg" alt="" class="primary"/>
                                            <img src="img/product/8.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/9.jpg" alt="" class="primary"/>
                                            <img src="img/product/10.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/11.jpg" alt="" class="primary"/>
                                            <img src="img/product/12.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-wrapper bb bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/13.jpg" alt="" class="primary"/>
                                            <img src="img/product/14.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                                <div class="product-wrapper bl">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="img/product/15.jpg" alt="" class="primary"/>
                                            <img src="img/product/16.jpg" alt="" class="secondary"/>
                                        </a>
                                        <div class="product-icon c-fff hover-bg">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                        <span class="sale">Sale</span>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>&300.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area start -->
                    <div class="banner-area mtb-35">
                        <div class="row">
                            <div class="col-lg-6  col-md-6 col-sm-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="img/banner/4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-6">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="img/banner/5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area end -->
                    <!-- tab-area start -->
                    <div class="tab-area box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-check-square-o icon bg-4"></i>
                            <h3>Products category</h3>
                            <div class="tab-menu floatright hidden-xs">
                                <ul>
                                    <li class="active"><a href="#electronics" data-toggle="tab">Electronics</a></li>
                                    <li><a href="#smartphone" data-toggle="tab">Smartphone</a></li>
                                    <li><a href="#tablets" data-toggle="tab">Tablets</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="electronics">
                                <div class="tab-active left left-right-angle">
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/1.jpg" alt="" class="primary"/>
                                                    <img src="img/product/2.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/3.jpg" alt="" class="primary"/>
                                                    <img src="img/product/4.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/9.jpg" alt="" class="primary"/>
                                                    <img src="img/product/10.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/11.jpg" alt="" class="primary"/>
                                                    <img src="img/product/12.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/13.jpg" alt="" class="primary"/>
                                                    <img src="img/product/14.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/15.jpg" alt="" class="primary"/>
                                                    <img src="img/product/16.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/6.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>								
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="smartphone">
                                <div class="tab-active left left-right-angle">
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/16.jpg" alt="" class="primary"/>
                                                    <img src="img/product/15.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/14.jpg" alt="" class="primary"/>
                                                    <img src="img/product/13.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/12.jpg" alt="" class="primary"/>
                                                    <img src="img/product/11.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/10.jpg" alt="" class="primary"/>
                                                    <img src="img/product/9.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/8.jpg" alt="" class="primary"/>
                                                    <img src="img/product/7.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/6.jpg" alt="" class="primary"/>
                                                    <img src="img/product/5.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/4.jpg" alt="" class="primary"/>
                                                    <img src="img/product/3.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/2.jpg" alt="" class="primary"/>
                                                    <img src="img/product/1.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/6.jpg" alt="" class="primary"/>
                                                    <img src="img/product/7.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/8.jpg" alt="" class="primary"/>
                                                    <img src="img/product/9.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tablets">
                                <div class="tab-active left left-right-angle">
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/4.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="" class="primary"/>
                                                    <img src="img/product/2.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/2.jpg" alt="" class="primary"/>
                                                    <img src="img/product/9.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/11.jpg" alt="" class="primary"/>
                                                    <img src="img/product/9.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/12.jpg" alt="" class="primary"/>
                                                    <img src="img/product/14.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="" class="primary"/>
                                                    <img src="img/product/7.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/13.jpg" alt="" class="primary"/>
                                                    <img src="img/product/14.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/9.jpg" alt="" class="primary"/>
                                                    <img src="img/product/16.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-items">
                                        <div class="product-wrapper bb bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/10.jpg" alt="" class="primary"/>
                                                    <img src="img/product/1.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                                <span class="sale">Sale</span>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper bl">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img src="img/product/12.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                                <div class="product-icon c-fff hover-bg">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>					
                            </div>
                        </div>
                    </div>
                    <!-- mostviewed-area start -->
                    <div class="mostviewed-area mt-35 box-shadow bg-fff">
                        <div class="product-title bg-1 text-uppercase">
                            <i class="fa fa-check-square-o icon bg-4"></i>
                            <h3>Mostviewed</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-4  col-md-4 hidden-sm hidden-xs">
                                <div class="single-banner">
                                    <a href="#">
                                        <img src="img/banner/6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8  col-md-8 col-sm-12 col-xs-12">
                                <div class="mostviewed-active left-right-angle">
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/6.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatleft">
                                                <h3><a href="#">Cras nec nisl ut erat</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/11.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/9.jpg" alt="" class="primary"/>
                                                    <img src="img/product/7.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Cras nec nisl ut erat</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/15.jpg" alt="" class="primary"/>
                                                    <img src="img/product/17.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Ligula euismod eget</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/8.jpg" alt="" class="primary"/>
                                                    <img src="img/product/18.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="" class="primary"/>
                                                    <img src="img/product/5.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/1.jpg" alt="" class="primary"/>
                                                    <img src="img/product/2.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/3.jpg" alt="" class="primary"/>
                                                    <img src="img/product/4.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/9.jpg" alt="" class="primary"/>
                                                    <img src="img/product/10.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/11.jpg" alt="" class="primary"/>
                                                    <img src="img/product/12.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/13.jpg" alt="" class="primary"/>
                                                    <img src="img/product/14.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/15.jpg" alt="" class="primary"/>
                                                    <img src="img/product/16.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/17.jpg" alt="" class="primary"/>
                                                    <img src="img/product/18.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-wrapper">
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/3.jpg" alt="" class="primary"/>
                                                    <img src="img/product/4.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/5.jpg" alt="" class="primary"/>
                                                    <img src="img/product/6.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                        <div class="product-wrapper single-featured mtb-15">
                                            <div class="product-img floatleft">
                                                <a href="#">
                                                    <img src="img/product/7.jpg" alt="" class="primary"/>
                                                    <img src="img/product/8.jpg" alt="" class="secondary"/>
                                                </a>
                                            </div>
                                            <div class="product-content floatright">
                                                <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>&300.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- mostviewed-area end -->
                </div>
                <!-- product-area end -->
            </div>
        </div>
    </div>
    <!-- all-product-area end -->
    <!-- brand-area start -->
    <div class="brand-area mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-active  box-shadow p-15  bg-fff">
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/7.jpg" alt="" />
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="#">
                                <img src="img/brand/8.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->
    <!-- order-area start -->
    <div class="order-area ptb-30 bt bg-fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-order c-fff bg-1 p-20">
                        <div class="order-icon">
                            <span class="fa fa-plane"></span>
                        </div>
                        <div class="order-content">
                            <h5>World-Wide Shipping</h5>
                            <span>On order over $100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-order c-fff bg-1 p-20">
                        <div class="order-icon">
                            <span class="fa fa-refresh"></span>
                        </div>
                        <div class="order-content">
                            <h5>30 Days Return</h5>
                            <span>Moneyback guarantee</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-order c-fff bg-1 p-20">
                        <div class="order-icon">
                            <span class="fa fa-umbrella"></span>
                        </div>
                        <div class="order-content">
                            <h5>SUPPORT 24/7</h5>
                            <span>Call us: ( +123 ) 456 789</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                    <div class="single-order c-fff bg-1 p-20">
                        <div class="order-icon">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="order-content">
                            <h5>MEMBER DISCOUNT</h5>
                            <span>10% on order over $200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order-area end -->


@endsection


