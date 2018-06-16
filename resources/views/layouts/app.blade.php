<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Xpress</title>

    <!-- CSS -->
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css') !!}
    <link href="/dist/css/pnotify.custom.css" rel="stylesheet">
    <link href="{{ mix('dist/css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">
</head>
<body>
<div class="header-stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="site-logo">
                    <a href="{{route('landingPage.index')}}"><img src="/dist/img/home/site-logo.png" alt=""
                                                                  class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-md-6">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav scrollto">
                            <li><a href="{{route('landingPage.index')}}">Acasa</a></li>
                            <li><a href="{{route('resume')}}">CV</a></li>
                            <li><a href="{{route('companies.list')}}">Companies</a></li>
                            <li><a href="{{route('job.list')}}">Jobs</a></li>
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse Jobs <i--}}
                            {{--class="fa fa-angle-down"></i></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="manage_application.html">Manage Applications</a></li>--}}
                            {{--<li><a href="manage_job.html">Manage jobs</a></li>--}}
                            {{--<li><a href="job_listing.html">Job Listing</a></li>--}}
                            {{--<li><a href="job.html">Job Page</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers <i--}}
                            {{--class="fa fa-angle-down"></i></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="employe_detail.html">Employers Detail</a></li>--}}
                            {{--<li><a href="employe_list.html">Employers List</a></li>--}}
                            {{--<li><a href="post.html">Post A job</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidates <i--}}
                            {{--class="fa fa-angle-down"></i></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="candidates.html">Browse Candidates</a></li>--}}
                            {{--<li><a href="resume.html">Submit Resume</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i--}}
                            {{--class="fa fa-angle-down"></i></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="about.html">About</a></li>--}}
                            {{--<li><a href="resume2.html">Resume Page</a></li>--}}
                            {{--<li><a href="faq.html">Faq</a></li>--}}
                            {{--<li><a href="price_table.html">Pricing Tables</a></li>--}}
                            {{--<li><a href="contact.html">Contact Us</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-3 text-right">
                @if(\Illuminate\Support\Facades\Auth::user())
                    @include('account')
                @else
                    <a href="{{route('login')}}" class="login active">Login</a>
                    <a href="{{route('register')}}" class="signup">Sign Up</a>
                @endif
            </div>
        </div>
    </div>
</div>
<hr class="header-divider">
@include('layouts.header')

<input type="hidden" name="_token" value="{{ csrf_token() }}">

@yield('content')

@include('layouts.footer')

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 footer-block text-center">
                <h5>Information</h5>
                <hr>
                <ul class="footer-link">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Careers with Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 footer-block text-center">
                <h5>For Employers</h5>
                <hr>
                <ul class="footer-link">
                    <li><a href="#">Browse Jobs</a></li>
                    <li><a href="#">Browse categories</a></li>
                    <li><a href="#">Submit Resume</a></li>
                    <li><a href="#">Candidate Dashboard</a></li>
                    <li><a href="#">Job Alerts</a></li>
                    <li><a href="#">My Bookmarks</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 footer-block text-center">
                <h5>For Jobseekers</h5>
                <hr>
                <ul class="footer-link">
                    <li><a href="#">Local Jobs</a></li>
                    <li><a href="#">Comapny Directory</a></li>
                    <li><a href="#">Browse Jobs</a></li>
                    <li><a href="#">Salar Estimator</a></li>
                    <li><a href="#">Resume Designer</a></li>
                    <li><a href="#">Consultancy</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 footer-block text-center">
                <h5>Browse Jobs</h5>
                <hr>
                <ul class="footer-link">
                    <li><a href="#">Browse All Jobs</a></li>
                    <li><a href="#">Govt. Jobs</a></li>
                    <li><a href="#">International Jobs</a></li>
                    <li><a href="#">Jobs by Company</a></li>
                    <li><a href="#">Jobs by Category</a></li>
                    <li><a href="#">Jobs by Location</a></li>
                    <li><a href="#">Jobs by Skill</a></li>
                </ul>
            </div>
            {{--<div class="footer-block footer-block2">--}}
                {{--<h5>Follow Us</h5>--}}
                {{--<hr>--}}
                {{--<ul class="follow">--}}
                    {{--<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                    {{--<li><a href="#" title="Google"><span class="ti-google"></span></a></li>--}}
                    {{--<li><a href="#" title="RSS"><i class="fa fa-rss"></i></a></li>--}}
                {{--</ul>--}}
                {{--<div class="border"></div>--}}
                {{--<div class="register">--}}
                    {{--<a href="#">8,368,480 <span>Registerd Members</span></a>--}}
                {{--</div>--}}
                {{--<div class="register job">--}}
                    {{--<a href="#">1,50,000 <span>Latest Jobs</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 padding-left">
                    <span>&#169; 2017 Jobxpress. All rights reserved.</span>
                </div>
                <div class="col-md-6 col-sm-6 text-right padding-left">
                    <ul class="bottom_link">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 1</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{!! Html::script('/dist/js/jquery.js') !!}
{!! Html::script('/dist/js/pnotify.custom.js') !!}
{!! Html::script('/dist/js/ckeditor.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js') !!}
{!! Html::script(mix('/dist/js/app.js')) !!}
@yield('extraScripts')

</body>
</html>