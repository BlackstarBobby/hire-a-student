@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="page-tab">
                        <div id="form">
                            <div id="userform">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active"><a href="#login" role="tab" data-toggle="tab">Log
                                            in</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="login">
                                        {{--<div class="row">--}}
                                        {{--<div class="social_button col-md-6 col-sm-6 text-center">--}}
                                        {{--<a href="#" class="facebook btn-block"><i--}}
                                        {{--class="fa fa-facebook-square"></i> Login with Faceboook</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="social_button col-md-6 col-sm-6 text-center">--}}
                                        {{--<a href="#" class="facebook twitter btn-block"><i--}}
                                        {{--class="fa fa-twitter-square"></i> Login with Twiiter</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                        {{--<div class="social_button col-md-6 col-sm-6 text-center">--}}
                                        {{--<a href="#" class="facebook google btn-block"><i--}}
                                        {{--class="fa fa-google-plus-square"></i> Login with Google+</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="social_button col-md-6 col-sm-6 text-center">--}}
                                        {{--<a href="#" class="facebook linked btn-block"><i--}}
                                        {{--class="fa fa-linkedin-square"></i> Login with Linked In</a>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <form id="login"  method="POST" action="{{ route('login') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" class="form-control" id="login_email" required
                                                       data-validation-required-message="Please enter your email address."
                                                       autocomplete="off" name="email">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label> Parola</label>
                                                <input type="password" class="form-control" id="login_password" required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off" name="password">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="mrgn-30-top">
                                                <button type="submit" class="btn btn-larger btn-block">
                                                    Autentifica
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection