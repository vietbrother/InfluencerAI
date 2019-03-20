@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col"></div>
            <div class="col-md-4">
                <div class="card">
                    {{--<div class="card-header">{{ __('Login') }}</div>--}}

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <br/>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-4" style="padding-left: 20px">
                                    <div class="row">
                                        <img src="theme/plugins/images/logo_login.png" class="thumb-lg img-fluid"
                                             alt="img">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                {{--<div class="col-md-10 offset-md-4">--}}
                                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                                        {{--{{ config('app.name', 'Laravel') }}--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                <div class="col-md-10 offset-md-1">
                                <h3 class="box-title label-center">{{ config('app.name', 'Laravel')}}</h3>
                                </div>
                            </div>

                            {{--<h3 class="box-title label-center">LOGIN WITH SOCIALS ACCOUNT</h3>--}}
                            <div class="button-box">
                                <a href="redirect/facebook" class="btn-animation-facebook"><span
                                            class="btn btn-facebook waves-effect btn-circle waves-light"><i
                                                class="fa fa-facebook"></i></span>Sign in with Facebook
                                </a>
                                <a href="redirect/twitter" class="btn-animation-twitter"><span
                                            class="btn btn-twitter waves-effect btn-circle waves-light"><i
                                                class="fa fa-twitter"></i></span>Sign in with Twitter
                                </a>
                                <a href="redirect/instagram" class="btn-animation-instagram"><span
                                            class="btn btn-warning waves-effect btn-circle waves-light"><i
                                                class="fa fa-instagram"></i></span>Sign in with Instagram
                                </a>
                                <a href="redirect/google" class="btn-animation-google"><span
                                            class="btn btn-youtube waves-effect btn-circle waves-light"><i
                                                class="fa fa-youtube"></i></span>Sign in with Youtube
                                </a>
                                {{--<button class="btn-animation-twitter"><span--}}
                                {{--class="btn btn-twitter waves-effect btn-circle waves-light"><i--}}
                                {{--class="fa fa-twitter"></i></span>Sign in with Twitter--}}
                                {{--</button>--}}
                                {{--<button class="btn-animation-instagram"><span--}}
                                {{--class="btn btn-warning waves-effect btn-circle waves-light"><i--}}
                                {{--class="fa fa-instagram"></i></span>Sign in with Instagram--}}
                                {{--</button>--}}
                                {{--<button class="btn-animation-google"><span--}}
                                {{--class="btn btn-youtube waves-effect btn-circle waves-light"><i--}}
                                {{--class="fa fa-youtube"></i></span>Sign in with Youtube--}}
                                {{--</button>--}}
                            </div>

                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h5 class="label-center bold">OR</h5>
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                            {{--<div class="col-md-10 offset-md-1">--}}
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon"><i class="ti-user"></i></div>--}}
                            {{--<input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
                            {{--placeholder="Username or Email"--}}
                            {{--value="{{ old('email') }}" required autofocus>--}}
                            {{--</div>--}}
                            {{--@if ($errors->has('email'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                            {{--<div class="col-md-10 offset-md-1">--}}
                            {{--<div class="input-group">--}}
                            {{--<div class="input-group-addon"><i class="ti-lock"></i></div>--}}
                            {{--<input id="password" type="password" class="form-control"--}}
                            {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
                            {{--name="password" required--}}
                            {{--placeholder="Password">--}}

                            {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group row">
                                {{--<label for="email"--}}
                                {{--class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}
                                <div class="col-md-10 offset-md-1">
                                    <input id="email" type="email" placeholder="Username or email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                {{--<label for="password"--}}
                                {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                                <div class="col-md-10 offset-md-1">
                                    <input id="password" type="password" placeholder="Password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 offset-md-2">
                                    <button type="submit" class="btn btn-instagram">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>>{{ __('Register') }}</b></a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{--<div class="col-md-1">--}}
                {{--<h3 class="label-center bold label-between">OR</h3>--}}
            {{--</div>--}}

            {{--social button start--}}
            {{--<div class="col-lg-5 col-sm-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h3 class="box-title label-center">LOGIN WITH SOCIALS ACCOUNT</h3>--}}
                        {{--<div class="button-box">--}}
                            {{--<a href="redirect/facebook" class="btn-animation-facebook"><span--}}
                                        {{--class="btn btn-facebook waves-effect btn-circle waves-light"><i--}}
                                            {{--class="fa fa-facebook"></i></span>Sign in with Facebook--}}
                            {{--</a>--}}
                            {{--<a href="redirect/twitter" class="btn-animation-twitter"><span--}}
                                        {{--class="btn btn-twitter waves-effect btn-circle waves-light"><i--}}
                                            {{--class="fa fa-twitter"></i></span>Sign in with Twitter--}}
                            {{--</a>--}}
                            {{--<a href="redirect/instagram" class="btn-animation-instagram"><span--}}
                                        {{--class="btn btn-warning waves-effect btn-circle waves-light"><i--}}
                                            {{--class="fa fa-instagram"></i></span>Sign in with Instagram--}}
                            {{--</a>--}}
                            {{--<a href="redirect/google" class="btn-animation-google"><span--}}
                                        {{--class="btn btn-youtube waves-effect btn-circle waves-light"><i--}}
                                            {{--class="fa fa-youtube"></i></span>Sign in with Youtube--}}
                            {{--</a>--}}
                            {{--<button class="btn-animation-twitter"><span--}}
                            {{--class="btn btn-twitter waves-effect btn-circle waves-light"><i--}}
                            {{--class="fa fa-twitter"></i></span>Sign in with Twitter--}}
                            {{--</button>--}}
                            {{--<button class="btn-animation-instagram"><span--}}
                            {{--class="btn btn-warning waves-effect btn-circle waves-light"><i--}}
                            {{--class="fa fa-instagram"></i></span>Sign in with Instagram--}}
                            {{--</button>--}}
                            {{--<button class="btn-animation-google"><span--}}
                            {{--class="btn btn-youtube waves-effect btn-circle waves-light"><i--}}
                            {{--class="fa fa-youtube"></i></span>Sign in with Youtube--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--social button end--}}
        </div>
        <!--social login start -->
        <div class="row justify-content-center">
            {{--<div class="col-lg-6 col-sm-6 col-xs-12">--}}
            {{--<div class="white-box">--}}
            {{--<h3 class="m-b-0 box-title">Button with icons</h3>--}}
            {{--<p class="text-muted m-b-30">Just add icon in i tag and text in span thats it </p>--}}
            {{--<div class="button-box">--}}
            {{--<button class="btn btn-outline btn-default waves-effect waves-light"> <i class="fa fa-heart m-r-5"></i> <span>Love</span></button>--}}
            {{--<button class="btn btn-info waves-effect waves-light"><span>Love</span> <i class="fa fa-heart m-l-5"></i></button>--}}
            {{--<button class="btn btn-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-check"></i></span>Success</button>--}}
            {{--<button class="btn btn-primary btn-rounded waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-envelope-o"></i></span>Mail</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>
        <!--social login end -->

    </div>

@endsection
