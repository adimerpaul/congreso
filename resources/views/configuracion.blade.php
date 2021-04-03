@extends('layouts.header')

@section('content')
    <!-- CONTENT -->
    <div id="page-content">
        <div class="setting-page">
            <div class="container">
                <div class="row ">
                    <div class="col s12 m12 l12 ">
                        <div class="section-title">
                            <span class="theme-secondary-color">CONFIGURACION</span> CUENTA
                        </div>
                    </div>
                </div>
                <br>
                <form>
                    <div class="row">
                        <div class="col s12 m12 l12 ">

                            <div class="setting-photo">
                                <img alt="avatar" src="img/user.jpg">
                            </div>
                            <div class="sphoto-text">Photo ( 130 x 130 )</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s12 m12 l12 no-margin-top" >
                            <div class="btn">
                                <span>File</span>
                                <input type="file" multiple></div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <input value="Jane" id="user-firstname" type="text" class="validate">
                            <label for="user-firstname">First Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <input value="Doe" id="user-lastname" type="text" class="validate">
                            <label for="user-lastname">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <input value="email@email.com" id="user-email" type="email" class="validate">
                            <label for="user-email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <input value="+628570000000" id="user-phone" type="tel" class="validate">
                            <label for="user-phone">Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <textarea id="user-address" class="materialize-textarea">Wijilan St, Yogyakarta, Indonesia</textarea>
                            <label for="user-address">Address</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                <input class="waves-effect waves-light btn" value="MODIFICAR" type="submit"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
@endsection
