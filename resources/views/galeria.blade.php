@extends('layouts.header')

@section('content')
    <!-- CONTENT -->
    <div id="page-content">
        <div class="section gallery">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">GALERIA</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <!-- filter -->
                        <div class="filter-gallery">
                            <button data-filter="gallery-no-filter" class="filter-button active">Todas</button>
                            <button data-filter="gallery-drink" class="filter-button">Jugos</button>
                            <button data-filter="gallery-food" class="filter-button">Comida</button>
                            <button data-filter="gallery-sport" class="filter-button">Deportes</button>
                            <button data-filter="gallery-hospital" class="filter-button">Hospital</button>
                        </div>
                        <!-- /filter -->
                    </div>
                </div>
                <div class="row">
                    <div class="wrap-gallery">
                        <div class="col s6 gallery-img-box gallery-sport">
                            <a class="gallery-list" href="img/gallery7.jpg"><img alt="gallery" src="img/gallery7.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-hospital">
                            <a class="gallery-list" href="img/gallery1.jpg"><img alt="gallery" src="img/gallery1.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-drink gallery-food">
                            <a class="gallery-list" href="img/gallery10.jpg"><img alt="gallery" src="img/gallery10.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-drink">
                            <a class="gallery-list" href="img/gallery4.jpg"><img alt="gallery" src="img/gallery4.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-food">
                            <a class="gallery-list" href="img/gallery6.jpg"><img alt="gallery" src="img/gallery6.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-hospital">
                            <a class="gallery-list" href="img/gallery3.jpg"><img alt="gallery" src="img/gallery3.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-drink">
                            <a class="gallery-list" href="img/gallery5.jpg"><img alt="gallery" src="img/gallery5.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-drink gallery-food">
                            <a class="gallery-list" href="img/gallery9.jpg"><img alt="gallery" src="img/gallery9.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-hospital">
                            <a class="gallery-list" href="img/gallery2.jpg"><img alt="gallery" src="img/gallery2.jpg"></a>
                        </div>
                        <div class="col s6 gallery-img-box gallery-sport">
                            <a class="gallery-list" href="img/gallery8.jpg"><img alt="gallery" src="img/gallery8.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
@endsection
