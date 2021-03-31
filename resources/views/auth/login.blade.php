@extends('layouts.header')

@section('content')
<div id="page-content">
    <div class="login-form">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="section-title">
                        <span class="theme-secondary-color">Ingresar </span> Cuenta
                    </div>
                </div>
            </div>
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                            <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email">Email</label>
                            @error('email')
                            {{--                        <span class="invalid-feedback" role="alert">--}}
                            {{--                                        <strong>{{ $message }}</strong>--}}
                            {{--                                    </span>--}}
                            <span class="new badge red">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4">
                            <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label for="password">Password</label>
                            @error('password')
                            {{--                        <span class="invalid-feedback" role="alert">--}}
                            {{--                                        <strong>{{ $message }}</strong>--}}
                            {{--                                    </span>--}}
                            <span class="new badge red">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l4 offset-m3 offset-l4 center">
{{--                            <input class="waves-effect waves-light btn" value="INGRESAR" type="submit">--}}
                            <button class="waves-effect waves-light btn" type="submit">INGRESAR</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row fp-text">
                <div class="col s12">
                    <div class="forgot-password-link">
                        <a href="#">Olvide mi contraseña</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="or-line">
                        <div class="ol-or">OR</div>
                        <div class="ol-line"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="sign-in-sosmed">
                        <div class="sign-in-icon sii-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="sign-in-icon sii-twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    ¿No tienes una cuenta? <a href="{{ route('register') }}">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
