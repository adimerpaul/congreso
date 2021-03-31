@extends('layouts.header')

@section('content')
    <!-- MAIN SLIDER -->
    <div class="main-slider" data-indicators="true">
        <div class="carousel carousel-slider " data-indicators="true">
            <a class="carousel-item"><img src="img/slide.jpg" alt="slider"></a>
            <a class="carousel-item"><img src="img/slide2.jpg" alt="slider"></a>
        </div>
    </div>
    <!-- END MAIN SLIDER -->
    <!-- CATEGORY -->
    <div class="section home-category">
        <div class="container">

            <div class="row icon-service">
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/care.png" alt="category">
                                    <h5>Asurance</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/hospital.png" alt="category">
                                    <h5>Find<br>Hospital</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/doctor.png" alt="category">
                                    <h5>Find<br>Doctor</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/store.png" alt="category">
                                    <h5>Find<br>Medicine</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/medical-report.png" alt="category">
                                    <h5>Medical<br>Records</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="col s4 m4 l2"><a class="icon-content">
                        <div class="content fadetransition">
                            <div class="in-content">
                                <div class="in-in-content">
                                    <img src="img/stethoscope.png" alt="category">
                                    <h5>Health<br>Information</h5>
                                </div>
                            </div>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END CATEGORY -->
    <!-- PROMO -->
    <div class="section promo">
        <div class="container">
            <div class="col s12">
                <img src="img/promo.jpg" alt="promo">
            </div>
        </div>
    </div>
    <!-- END PROMO -->
    <!-- NEWS -->
    <div class="section list-news">
        <div class="container">
            <div class="row row-title">
                <div class="col s12">
                    <div class="section-title">
                        <span class="theme-secondary-color">HEALTH</span> INFORMATION
                    </div>
                </div>
            </div>
            <div class="row row-list-news">
                <div class="col s12">

                    <!-- News item-->
                    <div class="news-item">
                        <div class="news-tem-image">
                            <img src="img/news1.jpg">
                        </div>
                        <div class="news-item-info">
                            <div class="list-news-title">
                                Benefits of ginger drink
                            </div>
                            Consectetur adipiscing elit, ut labore et dolore magna aliqua...
                            <a href="news-page.html" class="readmore">Read More</a>
                        </div>
                    </div>
                    <!-- End news item-->
                    <!-- News item-->
                    <div class="news-item">
                        <div class="news-tem-image">
                            <img src="img/news2.jpg">
                        </div>
                        <div class="news-item-info">
                            <div class="list-news-title">
                                How to maintain body endurance
                            </div>
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                            <a href="news-page.html" class="readmore">Read More</a>
                        </div>
                    </div>
                    <!-- End news item-->
                    <!-- News item-->
                    <div class="news-item">
                        <div class="news-tem-image">
                            <img src="img/news3.jpg">
                        </div>
                        <div class="news-item-info">
                            <div class="list-news-title">
                                How Do You Treat a Cold or the Flu?
                            </div>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui...
                            <a href="news-page.html" class="readmore">Read More</a>
                        </div>
                    </div>
                    <!-- End news item-->
                    <div class="more-news-list">
                        <a class="more-btn" href="news-list.html">See More News &gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- END NEWS -->
    <!-- FEATURED PRODUCT -->
    <div class="section product-item si-featured">
        <div class="container">
            <div class="row row-title">
                <div class="col s12">
                    <div class="section-title">
                        <span class="theme-secondary-color">OUR</span> PRODUCTS
                    </div>
                </div>
            </div>
            <div class="row slick-product">
                <div class="col s12">
                    <div id="featured-product" class="featured-product">
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Herbal Drinks</a></h5>
                                        <div class="item-info">healthy drinks</div>
                                        <div class="price">
                                            $5 <span>/600 ml</span>
                                        </div>
                                        <div class="stock-item">Only available 4 items</div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product2.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Vitamin</a></h5>
                                        <div class="item-info">1pack 20pcs</div>
                                        <div class="price">
                                            $8
                                        </div>
                                        <div class="stock-item">Only available 10 packs</div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product3.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Suplemen</a></h5>
                                        <div class="item-info">Lorem ipsum dolor sit amet</div>
                                        <div class="price">$5</div>
                                        <div class="stock-item">Ready stock</div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product4.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Tablet</a></h5>
                                        <div class="item-info">1pack - 25 pcs</div>
                                        <div class="price">
                                            $7 <span>/pack</span>
                                        </div>
                                        <div class="stock-item"></div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product5.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Tablet</a></h5>
                                        <div class="item-info">1pack - 20 pcs</div>
                                        <div class="price">
                                            $10 <span></span>
                                        </div>
                                        <div class="stock-item"></div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product6.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">pill</a></h5>
                                        <div class="item-info">lorem ipsum dolor</div>
                                        <div class="price">
                                            $10 <span></span>
                                        </div>
                                        <div class="stock-item"></div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item-->
                        <!-- Product item-->
                        <div>
                            <div class="col-slick-product">
                                <div class="box-product">
                                    <div class="bp-top">
                                        <div class="product-list-img">
                                            <div class="pli-one">
                                                <div class="pli-two">
                                                    <img src="img/product7.jpg" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <h5><a href="#">Energy Drink</a></h5>
                                        <div class="item-info">lorem ipsum dolor</div>
                                        <div class="price">
                                            $12 <span>/700ml</span>
                                        </div>
                                        <div class="stock-item">Available</div>
                                    </div>
                                    <div class="bp-bottom">
                                        <a href="product-page.html"> <button class="btn button-add-cart">BUY</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product item--></div>
                    <div class="more-product-list">
                        <a class="more-btn" href="product-list.html">See More Product ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FEATURED PRODUCT -->


    <!-- TESTIMONIAL  -->
    <div class="section testimonial">
        <div class="testimonial-wrap">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">
                            CUSTOMER REVIEWS
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wrap-item-testimonial">
                        <div id="testimonial-item" class="owl-carousel">
                            <!-- item -->
                            <div class="item">
                                <div class="item-testimonial">
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="img/profile6.jpg" alt="profile">
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>
                                            Best Service, I can recover!
                                        </p>
                                        <div class="client-title">
                                            <h4>John Doe</h4>
                                            <h5>Photographer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- item -->
                            <div class="item">
                                <div class="item-testimonial">
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="img/profile5.jpg" alt="profile">
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>
                                            Best place and fast respond, Thank You!
                                        </p>
                                        <div class="client-title">
                                            <h4>Elly Doe</h4>
                                            <h5>Entrepreneur</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item -->
                            <!-- item -->
                            <div class="item">
                                <div class="item-testimonial">
                                    <div class="client-info">
                                        <div class="client-img">
                                            <img src="img/profile4.jpg" alt="profile">
                                        </div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="client-content">
                                        <p>
                                            Good Product, I bought health products here..
                                        </p>
                                        <div class="client-title">
                                            <h4>Tayoo Doe</h4>
                                            <h5>Driver</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end item --></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-testimonial"></div>
    </div>
    <!-- END TESTIMONIAL  -->
@endsection
