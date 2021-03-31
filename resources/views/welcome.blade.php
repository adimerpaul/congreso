
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/asiapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:21:26 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Asiapp - Shop & Medical Mobile Template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS  -->
    <link rel="stylesheet" href="lib/font-awesome/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- materialize icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
</head>
<body id="homepage">
<!-- BEGIN PRELOADING -->
<div class="preloading">
    <div class="wrap-preload">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- END PRELOADING -->
<!-- HEADER -->
<header id="header">
    <div class="nav-wrapper container">


        <div class="header-menu-button">
            <a href="#" data-activates="nav-mobile-category" class="button-collapse" id="button-collapse-category">
                <div class="cst-btn-menu">
                    <i class="fas fa-align-left"></i>
                </div>
            </a>
        </div>
        <div class="header-logo">
            <a href="#" class="nav-logo">Asiapp</a>
        </div>
        <div class="header-icon-menu">
            <a href="#" data-activates="nav-mobile-account" class="button-collapse" id="button-collapse-account"><i class="fas fa-search"></i></a>
        </div>



    </div>
</header>
<!-- END HEADER -->
<!-- SIDE NAV-->
<nav>

    <!-- LEFT SIDENAV-->
    <ul id="nav-mobile-category" class="side-nav">
        @guest
            @if (Route::has('login'))
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                </li>--}}
                <li>
                    <a class="waves-effect waves-blue" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Ingresar</a>
                </li>
            @endif

            @if (Route::has('register'))
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                </li>--}}
                    <li>
                        <a class="waves-effect waves-blue" href="{{ route('register') }}"><i class="fas fa-sign-out-alt"></i>Registrate</a>
                    </li>
            @endif
        @else
{{--            <li class="nav-item dropdown">--}}
{{--                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    {{ Auth::user()->name }}--}}
{{--                </a>--}}

{{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                        {{ __('Logout') }}--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="profile">
                <div class="li-profile-info">
                    <img src="img/profile4.jpg" alt="profile">
                    <h2>John Doe</h2>
                    <div class="emailprofile"><a href="https://uidevr.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="02676f636b6e42676f636b6e2c616d6f">[email&#160;protected]</a></div>
                    <div class="balance">
                        Balance : <span>$600</span>
                    </div>
                </div>
                <div class="bg-profile-li">
                    <img alt="photo" src="img/bg-profile.jpg">
                </div>
            </li>
            <li>
                <a class="waves-effect waves-blue" href="index.html"><i class="fas fa-home"></i>Home</a>
            </li>
            <li>
                <a href="our-doctors.html"><i class="fas fa-user-md"></i>Our Doctors</a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-shopping-bag"></i>Shop<span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="far fa-newspaper"></i>News Blog<span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="news-list.html"><i class="fas fa-angle-right"></i>News List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="news-page.html"><i class="fas fa-angle-right"></i>News Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="gallery.html"><i class="fas fa-camera-retro"></i>Gallery</a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="fas fa-columns"></i>Pages <span><i class="fas fa-caret-down"></i></span>
                        </div>
                        <div class="collapsible-body">
                            <ul>
                                <li>
                                    <a class="waves-effect waves-blue" href="index.html"><i class="fas fa-angle-right"></i>Home</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="setting.html"><i class="fas fa-angle-right"></i>Setting</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="404.html"><i class="fas fa-angle-right"></i>404</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="login.html"><i class="fas fa-angle-right"></i>Sign In</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="signup.html"><i class="fas fa-angle-right"></i>Sign Up</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="single-page.html"><i class="fas fa-angle-right"></i>Single page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="news-list.html"><i class="fas fa-angle-right"></i>News List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="news-page.html"><i class="fas fa-angle-right"></i>News Page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Page</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-blue" href="contact.html"><i class="fas fa-angle-right"></i>Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="setting.html"><i class="fas fa-cog"></i>Setting</a>
            </li>
            <li>
                <a href="contact.html"><i class="fas fa-envelope"></i>Contact Us</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
            </li>
        @endguest



    </ul>
    <!-- END LEFT SIDENAV-->
    <!-- RIGHT SIDENAV-->
    <ul id="nav-mobile-account" class="side-nav">
        <li class="sidenav-logo">
            Search
        </li>
        <li>
            <div class="search-wrapper ">
                <input id="search"><i class="material-icons">search</i>
                <div class="search-results"></div>
            </div>
        </li>
        <li>
            <ul class="sidenav-search-result">
                <li class="search-result-head"><a href="#">Search result</a></li>
                <li><a href="#">Info - Healt Care Solution</a></li>
                <li><a href="#">info - 5 ways to winterproof your skin </a></li>
                <li><a href="#">info - 4 healthy snacks to keep you full </a></li>

            </ul>
        </li>
        <li>
            <ul class="sidenav-search-result">
                <li class="search-result-head"><a href="#">Populer tag</a></li>
                <li>
                    <div class="section populer-search">
                        <div class="list-tag-word">
                            <a class="tag-word">Doctor</a>
                            <a class="tag-word">Medicine</a>
                            <a class="tag-word">Hospital</a>
                            <a class="tag-word">health</a>
                            <a class="tag-word">drink</a>
                            <a class="tag-word">sport</a>
                            <a class="tag-word">Checkup</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>


    </ul>
    <!-- END RIGHT SIDENAV-->

</nav>
<!-- END SIDENAV-->
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
<!-- SUBSCRIBE -->
<div class="section subscribe">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="section-title">SUBSCRIBE</div>
                <p class="center">Get healthy news and solutions every day</p>
                <div class="mail-subscribe-box">
                    <input class="form-control" name="user-email" placeholder="Enter email address" value="" type="email">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-subscribe">
        <img src="img/bg-profile.jpg">
    </div>
</div>
<!-- END SUBSCRIBE -->
<!-- FOOTER  -->
<footer id="footer">
    <div class="container">
        <div class="row row-footer-icon">
            <div class="col s12">
                <div class="footer-sosmed-icon ">
                    <div class="wrap-circle-sosmed ">
                        <a href="#">
                            <div class="circle-sosmed">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="wrap-circle-sosmed ">
                        <a href="#">
                            <div class="circle-sosmed">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </a>
                    </div>
                    <div class="wrap-circle-sosmed ">
                        <a href="#">
                            <div class="circle-sosmed">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                    </div>
                    <div class="wrap-circle-sosmed ">
                        <a href="#">
                            <div class="circle-sosmed">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            2019 <span>Asiapp</span>, All rights reserved.
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<!-- Script -->
{{--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="js/jquery.min.js"></script>
<script src="js/materialize.min.js"></script>
<!-- Owl carousel -->
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<!-- Slick JS -->
<script src="lib/slick/slick/slick.min.js"></script>
<!-- Custom script -->
<script src="js/custom.js"></script>
</body>

<!-- Mirrored from uidevr.com/tf/asiapp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:21:46 GMT -->
</html>
