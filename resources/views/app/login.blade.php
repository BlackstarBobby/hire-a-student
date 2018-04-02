@extends('app.app')

@section('content')
    <main id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="page-tab">
                        <div id="form">
                            <div id="userform">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li class="active border-right"><a href="#login" role="tab" data-toggle="tab">Log
                                            in</a></li>
                                    <li><a href="#signup" role="tab" data-toggle="tab">Sign up</a></li>
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
                                        <form id="login">
                                            <div class="form-group">
                                                <label> Username or E-mail</label>
                                                <input type="email" class="form-control" id="login_email" required
                                                       data-validation-required-message="Please enter your email address."
                                                       autocomplete="off" name="email">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label> Password</label>
                                                <input type="password" class="form-control" id="login_password" required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off" name="password">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                            </div>
                                            <div class="mrgn-30-top">
                                                <button type="submit" class="btn btn-larger btn-block">
                                                    Log in
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="signup">
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
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" id="first_name" required
                                                       data-validation-required-message="Please enter your name."
                                                       autocomplete="off">
                                                <div class="search_icon"><span class="ti-user"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label> Email </label>
                                                <input type="email" class="form-control" id="signup_email" required
                                                       data-validation-required-message="Please enter your email address."
                                                       autocomplete="off">
                                                <div class="search_icon"><span class="ti-email"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password </label>
                                                <input type="password" class="form-control" id="signup_password" required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label> Confirm Password </label>
                                                <input type="password" class="form-control" id="confirm_password" required
                                                       data-validation-required-message="Please enter your password"
                                                       autocomplete="off">
                                                <div class="search_icon"><span class="ti-pin"></span></div>
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