@extends('layouts.master')
@section('content')
@include('layouts.partials.customerheader')
    <div class="head_banner" uk-scrollspy="target: img; cls: uk-animation-fade; delay: 300">
        <img src="images/head_banner.jpg" class="img-fluid w-100" alt="Banner" title="Banner" />
    </div>
    <div class="below_banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2>
                        Lorem Ipsum Generator
                        Generate Lorem Ipsum placeholder text.
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="homeSection2" uk-scrollspy="target: h2, li; cls: uk-animation-slide-bottom-medium; delay: 300">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="title_head">Explore wide range of category</h2>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid mb-5">
                            <li>
                                <div class="uk-panel">
                                    <a class="grid_cate">
                                        <img src="images/category/video.png" class="img-fluid" alt="marketing videos" title="marketing videos" />
                                        <div class="title">
                                            <h4>Marketing Videos</h4>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <a class="grid_cate">
                                        <img src="images/category/wrting.png" class="img-fluid" alt="Writing" title="Writing" />
                                        <div class="title">
                                            <h4>Writing</h4>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <a class="grid_cate">
                                        <img src="images/category/graphic-design.png" class="img-fluid" alt="Graphic Design" title="Graphic Design" />
                                        <div class="title">
                                            <h4>Graphic Design</h4>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <a class="grid_cate">
                                        <img src="images/category/business.png" class="img-fluid" alt="Business" title="Business" />
                                        <div class="title">
                                            <h4>Business</h4>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <a class="grid_cate">
                                        <img src="images/category/legal-services.png" class="img-fluid" alt="Legal services" title="Legal services" />
                                        <div class="title">
                                            <h4>Legal services</h4>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="homeSection3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 uk-dark">
                    <h2 class="title_head">Top Selling Services</h2>
                    <p>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <div class="divider_line"></div>
                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay:true; autoplay-interval:2500;" uk-scrollspy="target: li; cls: uk-animation-slide-left-small; delay: 300">

                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m uk-grid mt-5">
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/logo-designers.jpg" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Logo designers</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/content-writing.jpg" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Content writing</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/whiteboard.png" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Whiteboard Videos</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/video-animation.png" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">2D animation videos</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/pamphalets.png" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Pamphalets</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/brochures.png" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Brochures</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <img src="images/top-selling/voice-narration.png" alt="" title="">
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title">Voiceovers</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>


                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="homeSection4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6" uk-scrollspy="target: div; cls: uk-animation-fade; delay: 200">
                    <div class="pr-5">
                        <iframe src="https://www.youtube.com/embed/1HcWhJy7mBU" width="100%" height="450" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true; autoplay:false;"></iframe>
                    </div>
                </div>
                <div class="col-xl-6" uk-scrollspy="target: h2, li; cls: uk-animation-scale-up; delay: 500">
                    <h2 class="title_head2">Faster - Easier - Better</h2>
                    <ul class="list-unstyled">
                        <li class="div_section3">
                            <div class="icon_style">
                                <img src="images/light-bolt.png" class="img-fluid" alt="Faster" title="Faster" />
                            </div>
                            <div class="section3_grid">
                                <h4>Faster</h4>
                                <p>
                                    Dont wait for days to get work
                                    completed. Pick a service of your choice
                                    on Ekprice and get it done in just few hours.
                                </p>
                            </div>
                        </li>
                        <li class="div_section3">
                            <div class="icon_style">
                                <img src="images/easier.png" class="img-fluid" alt="Faster" title="Faster" />
                            </div>
                            <div class="section3_grid">
                                <h4>Easier</h4>
                                <p>
                                    It cant get better than this to get your work
                                    done. Place orders for services just like you
                                    place orders for products.
                                </p>
                            </div>
                        </li>
                        <li class="div_section3">
                            <div class="icon_style">
                                <img src="images/better.png" class="img-fluid" alt="Faster" title="Faster" />
                            </div>
                            <div class="section3_grid">
                                <h4>Better</h4>
                                <p>
                                    Get services from professionals with quality assured.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="home_recent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="title_head">Recently Added services</h2>
                    <div class="divider_line"></div>

                    <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 500">
                        <ul class="uk-slider-items uk-grid-small uk-child-width-1-2 uk-child-width-1-5@m uk-grid mt-5">
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img01.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img02.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img03.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img04.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img05.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recent_grid">
                                    <img src="images/recent/img03.jpg" class="img-fluid" alt="" title="" />
                                    <h4>Some title here</h4>
                                </div>
                            </li>
                            <li>
                                <div class="uk-panel">
                                    <div class="recent_grid">
                                        <img src="images/recent/img04.jpg" class="img-fluid" alt="" title="" />
                                        <h4>Some title here</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>


                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_reviews">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="title_head">Customer reviews</h2>
                    <div class="divider_line"></div>
                    <div uk-slider="autoplay:true; autoplay-interval: 3000">
                        <div class="uk-position-relative">
                            <div class="uk-slider-container">
                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid mt-5" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 500">
                                    <li>
                                        <div class="uk-panel review_grids">
                                            <div class="quote_box">
                                                <p>
                                                    Lorem Ipsum Generator
                                                    Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!
                                                </p>
                                                <div class="star_rating">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reView_AuthoR">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                                <div class="author_head">
                                                    <h4>Raima Singh</h4>
                                                    <small>Tess Emterprises</small>
                                                    <a href="#"><i class="fa fa-play-circle-o"></i>&nbsp; Watch videos review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-panel review_grids">
                                            <div class="quote_box">
                                                <p>
                                                    Lorem Ipsum Generator
                                                    Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!
                                                </p>
                                                <div class="star_rating">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reView_AuthoR">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                                <div class="author_head">
                                                    <h4>Tessa Jane</h4>
                                                    <small>Tess Emterprises</small>
                                                    <a href="#"><i class="fa fa-play-circle-o"></i>&nbsp; Watch videos review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-panel review_grids">
                                            <div class="quote_box">
                                                <p>
                                                    Lorem Ipsum Generator
                                                    Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!
                                                </p>
                                                <div class="star_rating">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reView_AuthoR">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                                <div class="author_head">
                                                    <h4>Anirudh Singh</h4>
                                                    <small>Tess Emterprises</small>
                                                    <a href="#"><i class="fa fa-play-circle-o"></i>&nbsp; Watch videos review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-panel review_grids">
                                            <div class="quote_box">
                                                <p>
                                                    Lorem Ipsum Generator
                                                    Generate Lorem Ipsum placeholder text. Select the number of characters, words, sentences or paragraphs, and hit generate!
                                                </p>
                                                <div class="star_rating">
                                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="reView_AuthoR">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                                <div class="author_head">
                                                    <h4>Anirudh Singh</h4>
                                                    <small>Tess Emterprises</small>
                                                    <a href="#"><i class="fa fa-play-circle-o"></i>&nbsp; Watch videos review</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <ul class="uk-slider-nav uk-dotnav mt-5"></ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_Topreasons" uk-scrollspy="target:.reason_Grid; cls: uk-animation-slide-bottom-medium; delay: 500">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-danger title_head mb-5">Top Reasons to choose Ekprice for your Business</h2>
                </div>
                <div class="col-xl-4">
                    <div class="reason_Grid">
                        <img src="images/secure-payment.png" class="img-fluid" alt="" title="" />
                        <h4>Payment Protection Gauranteed</h4>
                        <p>Make payment with confidence, payment will be released to freelancers only after you approve the order.  </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="reason_Grid">
                        <img src="images/hand.png" class="img-fluid" alt="" title="" />
                        <h4>Know the price upfront</h4>
                        <p>Know how much you will be paying for the service well in advance. No need to wait till the last step and then be surpised with sky rocketing prices.</p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="reason_Grid">
                        <img src="images/24-7.png" class="img-fluid" alt="" title="" />
                        <h4> 24/7 support</h4>
                        <p>Ekprice is here whenever you need us. Get all your questions answered.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home_topSellers" uk-scrollspy="target: li; cls: uk-animation-slide-top-small; delay: 500">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="title_head">Top Sellers</h2>
                        <div class="divider_line"></div>
                        <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slider="autoplay:true; autoplay-interval: 3000">
                            <ul class="uk-slider-items uk-grid-small uk-child-width-1-2 uk-child-width-1-5@m uk-grid mt-5">
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <div class="uk-card uk-card-default seller_card">
                                            <div class="crown">
                                                <img src="images/royal-crown.png" alt="" title="" class="img-fluid" />
                                            </div>
                                            <div class="uk-card-media-top">
                                                <img src="images/seller/seller1.png" class="img-fluid" alt="" title="" />
                                            </div>
                                            <div class="uk-card-body">
                                                <h4 class="uk-card-title">Logo Design</h4>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half"></i>
                                                </div>
                                                <span class="rating_number d-block">09 / 4.5 stars</span>
                                                <small>(Certification / Delivery ratings)</small>
                                                <p><em>Pune, India</em></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="seller_reviews">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="title_head">Seller testimonial</h2>
                    <div class="divider_line mb-5"></div>
                    <div uk-slider="autoplay:true; autoplay-interval: 3000" uk-scrollspy="target: li; cls: uk-animation-fade; delay: 500">
                        <div class="uk-position-relative">

                            <div class="uk-slider-container uk-light">
                                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@s uk-child-width-1-1@m">
                                    <li>
                                        <div class="uk-panel">
                                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin sellerReVIEWgRID" uk-grid>
                                                <div class="uk-card-media-left uk-cover-container">
                                                    <img src="images/seller/seller_img.jpg" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                    <div class="uk-position-cover">
                                                        <div class="uk-position-center">
                                                            <a href="#"><i class="ti ti-control-play fa-4x"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card-body">
                                                        <p>
                                                            "Being a small but growing brand, we have to
                                                            definitely do a lot more with less. And when you
                                                            want to create a business bigger than yourself,
                                                            you’re going to need help.
                                                            And that’s what ekprice does"
                                                            <br />
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                                                        </p>
                                                        <div class="author_div">
                                                            <h4>Alina Marcos</h4>
                                                            <strong><em>Content writer</em></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-panel">
                                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin sellerReVIEWgRID" uk-grid>
                                                <div class="uk-card-media-left uk-cover-container">
                                                    <img src="images/seller/seller_img.jpg" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                    <div class="uk-position-cover">
                                                        <div class="uk-position-center">
                                                            <a href="#"><i class="ti ti-control-play fa-4x"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-card-body">
                                                        <p>
                                                            "Being a small but growing brand, we have to
                                                            definitely do a lot more with less. And when you
                                                            want to create a business bigger than yourself,
                                                            you’re going to need help.
                                                            And that’s what ekprice does"
                                                            <br />
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                                                        </p>
                                                        <div class="author_div">
                                                            <h4>Alina Marcos</h4>
                                                            <strong><em>Content writer</em></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!--<div class="uk-hidden@s uk-light">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                            <div class="uk-visible@s">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>-->

                        </div>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                    </div>
                    <div class="col-xl-12 text-center">
                        <a href="#" class="btn btn-lg btn-outline-success mt-3">Know more</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="seller_div">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-5">
                    <img src="images/seller-vector.png" class="img-fluid" alt="" title="" />
                </div>
                <div class="col-xl-7">
                    <h3>Make every minute count. Earn money ANY TIME. </h3>
                    <p>Start posting your services on Ekprice.com</p>
                    <a href="#" class="btn btn-danger">Join as service provider</a>
                </div>
            </div>
        </div>
    </div>
@endsection