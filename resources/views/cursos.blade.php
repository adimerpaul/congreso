@extends('layouts.header')

@section('content')
    <!-- CONTENT -->
    <div id="page-content">
        <div class="wishlist-page">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">
                            <span class="theme-secondary-color">Nuestros</span> Cursos Online
                        </div>
                    </div>
                </div>

                <div class="box-wish-list">
                    <!-- item -->
                    <div class="row wish-item">
                        <div class="col s12">
                            <div class="wish-box">
                                <div class="wi-img">
                                    <div class="wi-img-product">
                                        <img src="img/product.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="wi-name">
                                    <div class="win-top">
                                        <div class="win-title">Herbal Drinks</div>
                                        <div class="win-price">$ 5.00</div>
                                        <div class="win-info">Health drinks</div>
                                    </div>
                                </div>
                                <div class="wi-remove">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row wish-item">
                        <div class="col s12">
                            <div class="wish-box">
                                <div class="wi-img">
                                    <div class="wi-img-product">
                                        <img src="img/product2.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="wi-name">
                                    <div class="win-top">
                                        <div class="win-title">Vitamin</div>
                                        <div class="win-price">$ 8.00</div>
                                        <div class="win-info">1pack 20pcs</div>
                                    </div>
                                </div>
                                <div class="wi-remove">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row wish-item">
                        <div class="col s12">
                            <div class="wish-box">
                                <div class="wi-img">
                                    <div class="wi-img-product">
                                        <img src="img/product3.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="wi-name">
                                    <div class="win-top">
                                        <div class="win-title">Suplemen</div>
                                        <div class="win-price">$ 5.00</div>
                                        <div class="win-info">Lorem ipsum</div>
                                    </div>
                                </div>
                                <div class="wi-remove">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row wish-item">
                        <div class="col s12">
                            <div class="wish-box">
                                <div class="wi-img">
                                    <div class="wi-img-product">
                                        <img src="img/product4.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="wi-name">
                                    <div class="win-top">
                                        <div class="win-title">Tablet</div>
                                        <div class="win-price">$ 7.00</div>
                                        <div class="win-info">1pack - 25 pcs</div>
                                    </div>
                                </div>
                                <div class="wi-remove">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row wish-item">
                        <div class="col s12">
                            <div class="wish-box">
                                <div class="wi-img">
                                    <div class="wi-img-product">
                                        <img src="img/product5.jpg" alt="product">
                                    </div>
                                </div>
                                <div class="wi-name">
                                    <div class="win-top">
                                        <div class="win-title">Tablet 2</div>
                                        <div class="win-price">$ 10.00</div>
                                        <div class="win-info">1pack - 20pcs</div>
                                    </div>
                                </div>
                                <div class="wi-remove">
                                    <a href="#"><i class="far fa-times-circle"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end item --></div>
            </div>
            <!-- PAGINATION -->
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#!"><i class="material-icons">chevron_left</i></a>
                            </li>
                            <li class="active">
                                <a href="#!">1</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">2</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">3</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">4</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!">5</a>
                            </li>
                            <li class="waves-effect">
                                <a href="#!"><i class="material-icons">chevron_right</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGINATION --></div>
    </div>
    <!-- END CONTENT -->
@endsection
