@extends('layouts.header')

@section('content')
    <!-- CONTENT -->
    <div id="page-content">
        <div class="contact-wrap theme-form">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="section-title">
                            CONTACTA<span class="theme-secondary-color">NOS</span>
                        </div>
                    </div>
                    <div class="col s12">
                        <p class="center">Se tiene soporte 24/7 .</p>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="name" type="text" class="validate">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="email" type="email" class="validate">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="phone" type="tel" class="validate">
                                <label for="phone">Phone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <input id="subject" type="text" class="validate">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                                <textarea id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
                                <input class="waves-effect waves-light btn" value="Send" type="submit"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
@endsection
