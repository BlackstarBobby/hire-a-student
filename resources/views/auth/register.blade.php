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
                                    <li class="active"><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="signup">
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
                                        <form id="signup" method="post" action="{{route('register')}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group">
                                                <label>Nume</label>
                                                <input type="text" class="form-control" id="last_name" required
                                                       data-validation-required-message="Please enter your name."
                                                       autocomplete="off" name="last_name">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Prenume</label>
                                                <input type="text" class="form-control" id="first_name" required
                                                       data-validation-required-message="Please enter your name."
                                                       autocomplete="off" name="first_name">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label> Email </label>
                                                <input type="email" class="form-control" id="signup_email" required
                                                       data-validation-required-message="Please enter your email address."
                                                       autocomplete="off" name="email">
                                                <div class="search_icon"><span class="ti-email"></span></div>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label>Parola </label>
                                                <input type="password" class="form-control" id="signup_password"
                                                       required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off" name="password">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label> Confirma Parola </label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                       required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off" name="password_confirmation">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tip Cont</label>

                                            </div>
                                            <div class="mrgn-30-top">
                                                <button type="submit" class="btn btn-larger btn-block">
                                                    Sign up
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