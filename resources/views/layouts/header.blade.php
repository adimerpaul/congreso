
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uidevr.com/tf/asiapp/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:22:49 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Congreso de neurología </title>
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
<header id="header" class="header-innerpage ">
    <div class="nav-wrapper container">


        <div class="header-menu-button">
            <a href="#" data-activates="nav-mobile-category" class="button-collapse" id="button-collapse-category">
                <div class="cst-btn-menu">
                    <i class="fas fa-align-left"></i>
                </div>
            </a>
        </div>
        <div class="header-logo">
            <a href="/" class="nav-logo">Congreso Neurologia</a>
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
                    <img src="img/user.jpg" alt="profile">
                    <h2>{{Auth::user()->name}}</h2>
                    <div class="emailprofile">
                        <a  class="__cf_email__" >
                            {{Auth::user()->email}}
                        </a>
                    </div>
                    <div class="balance">
                        <b> Inscripcion: </b><span  class="<?=Auth::user()->estado=='PENDIENTE'?'yellow darken-1':'green'?>" style="padding-right: 5px;padding-left: 3px;border-radius:3px;color: white">{{Auth::user()->estado}}</span>
                    </div>
                </div>
                <div class="bg-profile-li">
                    <img alt="photo" src="img/bg-profile.jpg">
                </div>
            </li>
            <li>
                <a class="waves-effect waves-blue" href="/"><i class="fas fa-home"></i>Principal</a>
            </li>
            <li>
                <a href="/expocitores"><i class="fas fa-user-md"></i>Expocitores</a>
            </li>
            <li>
                <a href="/cursos"><i class="fas fa-shopping-cart"></i>Cursos online</a>
            </li>
            <li>
                <a href="/biblioteca"><i class="fas fa-bookmark"></i>Biblioteca vitual</a>
            </li>
{{--            <li>--}}
{{--                <ul class="collapsible collapsible-accordion">--}}
{{--                    <li>--}}
{{--                        <div class="collapsible-header">--}}
{{--                            <i class="fas fa-shopping-bag"></i>Cursos virtuales<span><i class="fas fa-caret-down"></i></span>--}}
{{--                        </div>--}}
{{--                        <div class="collapsible-body">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Page</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <ul class="collapsible collapsible-accordion">--}}
{{--                    <li>--}}
{{--                        <div class="collapsible-header">--}}
{{--                            <i class="far fa-newspaper"></i>News Blog<span><i class="fas fa-caret-down"></i></span>--}}
{{--                        </div>--}}
{{--                        <div class="collapsible-body">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="news-list.html"><i class="fas fa-angle-right"></i>News List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="news-page.html"><i class="fas fa-angle-right"></i>News Page</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li>
                <a href="/galeria"><i class="fas fa-camera-retro"></i>Galeria</a>
            </li>
{{--            <li>--}}
{{--                <ul class="collapsible collapsible-accordion">--}}
{{--                    <li>--}}
{{--                        <div class="collapsible-header">--}}
{{--                            <i class="fas fa-columns"></i>Pages <span><i class="fas fa-caret-down"></i></span>--}}
{{--                        </div>--}}
{{--                        <div class="collapsible-body">--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="index.html"><i class="fas fa-angle-right"></i>Home</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="setting.html"><i class="fas fa-angle-right"></i>Setting</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="404.html"><i class="fas fa-angle-right"></i>404</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="login.html"><i class="fas fa-angle-right"></i>Sign In</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="signup.html"><i class="fas fa-angle-right"></i>Sign Up</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="single-page.html"><i class="fas fa-angle-right"></i>Single page</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="news-list.html"><i class="fas fa-angle-right"></i>News List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="news-page.html"><i class="fas fa-angle-right"></i>News Page</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="product-list.html"><i class="fas fa-angle-right"></i>Product List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="wish-list.html"><i class="fas fa-angle-right"></i>Wish List</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="product-page.html"><i class="fas fa-angle-right"></i>Product Page</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="shopping-cart.html"><i class="fas fa-angle-right"></i>Shopping Cart</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="checkout.html"><i class="fas fa-angle-right"></i>Checkout</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="waves-effect waves-blue" href="contact.html"><i class="fas fa-angle-right"></i>Contact Us</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li>
                <a href="/configuracion"><i class="fas fa-cog"></i>Configuraciones</a>
            </li>
            <li>
                <a href="/contacto"><i class="fas fa-envelope"></i>Contactos</a>
            </li>
            <li>
                {{--                <a href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a>--}}
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Salir                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
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



<!-- CONTENT -->
@yield('content')
<!-- END CONTENT-->




<!-- SUBSCRIBE -->
<div class="section subscribe">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="section-title">Suscribete</div>
                <p class="center">Obtenga noticias y soluciones saludables todos los días</p>
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
            {{date('Y')}} <span>Asiapp</span>, Todos los derechos reservados.
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<!-- Script -->
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

<!-- Mirrored from uidevr.com/tf/asiapp/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 20:22:49 GMT -->
</html>
