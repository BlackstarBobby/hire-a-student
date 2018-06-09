@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-body">
                            <div class="col-md-3 p-l">
                                <div class="block">
                                    <img src="{{$job->company->logo ?? null}}" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="job_title">
                                    {{$job->title ?? null}}
                                    {{--<a href="#">Web Designer</a>--}}
                                </div>
                                {{--<div class="col-md-4 p-l">--}}
                                {{--<div class="packege">--}}
                                {{--<i class="fa fa-briefcase"></i>3-6 Years--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-4 p-l">
                                    <div class="packege">
                                        {{$job->salary}}
                                    </div>
                                </div>
                                <div class="col-md-4 p-l">
                                    <div class="packege">
                                        <i class="fa fa-clock-o"></i>
                                        {{\Carbon\Carbon::parse($job->created_at)->diffInDays(\Carbon\Carbon::now())}}
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                            <div class="page-heading"></div>
                            <div class="page-heading">
                                <h2>Job Description</h2>
                                {{$job->description}}
                            </div>
                            <a href="#" class="btn btn-default">Apply For This Job</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel-body">
                            <div class="job_title block1">
                                Company Profile
                                <a href="{{route('companies.index', ['comapny' => $job->company->id])}}">{{$job->company->company_name}}</a>
                            </div>
                            <a href="https://www.facebook.com/" target="blank" class="user-media"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com" target="blank" class="user-media twitter"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="http://www.linkedin.com/" target="blank" class="user-media linke"><i
                                        class="fa fa-linkedin"></i></a>
                            <a href="https://mail.google.com/" target="blank" class="user-media google"><span
                                        class="ti-google"></span></a>
                            <div class="clearfix"></div>
                            <div class="contact_details">
                                <span><i class="fa fa-map"></i> {{$job->company->location}}</span>
                                <span><i class="fa fa-phone"></i> {{$job->company->phone}}</span>
                                <span><i class="fa fa-envelope"></i><a href="#">{{$job->company->email}}</a></span>
                                <span><i class="fa fa-globe"></i><a href="#">{{$job->company->website}}</a></span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="job_title block1">
                                Send a Query
                            </div>
                            <p></p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address"/>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <a href="#" class="btn btn-default btn-block">Submit Message</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Share On :</p>
                        <div class="social_button col-md-4 text-center p-l">
                            <a href="https://www.facebook.com/" class="facebook btn-block" target="blank"><i
                                        class="fa fa-facebook"></i> Login with Faceboook</a>
                        </div>
                        <div class="social_button col-md-4  p-l p-r text-center">
                            <a href="https://twitter.com" class="facebook twitter  btn-block" target="blank"><i
                                        class="fa fa-twitter"></i> Login with Faceboook</a>
                        </div>
                        <div class="social_button col-md-4 text-center p-r">
                            <a href="https://mail.google.com/" class="facebook google  btn-block" target="blank"><i
                                        class="fa fa-google-plus"></i> Login with Faceboook</a>
                        </div>
                        {{--<div class="clearfix"></div>--}}
                        {{--<div class="page-heading">--}}
                            {{--<h2>Similar Jobs</h2>--}}
                        {{--</div>--}}
                        {{--<div class="table-bg">--}}
                            {{--<table class="table">--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="tab-image"><img src="assets/images/home/img1.jpg" alt=""--}}
                                                                    {{--class="img-responsive"></div>--}}
                                        {{--<h1>Team of PHP MySQL Developers <p>Agricultural Sceences</p></h1>--}}
                                    {{--</td>--}}
                                    {{--<td class="work-time">Full Time</td>--}}
                                    {{--<td><span class="ti-location-pin"></span> Toulouse, France</td>--}}
                                    {{--<td><a href="#" class="table-btn-default">View Job</a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="tab-image"><img src="assets/images/home/img2.jpg" alt=""--}}
                                                                    {{--class="img-responsive"></div>--}}
                                        {{--<h1>Urgent Opening for PHP Developer <p>Agricultural Sceences</p></h1>--}}
                                    {{--</td>--}}
                                    {{--<td class="work-time part">Part Time</td>--}}
                                    {{--<td><span class="ti-location-pin"></span> Toulouse, France</td>--}}
                                    {{--<td><a href="#" class="table-btn-default">View Job</a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="tab-image"><img src="assets/images/home/img3.jpg" alt=""--}}
                                                                    {{--class="img-responsive"></div>--}}
                                        {{--<h1>Urgent Require- Web Developer <p>Agricultural Sceences</p></h1>--}}
                                    {{--</td>--}}
                                    {{--<td class="work-time part">Part Time</td>--}}
                                    {{--<td><span class="ti-location-pin"></span> Toulouse, France</td>--}}
                                    {{--<td><a href="#" class="table-btn-default">View Job</a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="tab-image"><img src="assets/images/home/img4.jpg" alt=""--}}
                                                                    {{--class="img-responsive"></div>--}}
                                        {{--<h1>Nodejs,Angularjs Developer <p>Agricultural Sceences</p></h1>--}}
                                    {{--</td>--}}
                                    {{--<td class="work-time">Full Time</td>--}}
                                    {{--<td><span class="ti-location-pin"></span> Toulouse, France</td>--}}
                                    {{--<td><a href="#" class="table-btn-default">View Job</a></td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<td>--}}
                                        {{--<div class="tab-image"><img src="assets/images/home/img5.jpg" alt=""--}}
                                                                    {{--class="img-responsive"></div>--}}
                                        {{--<h1>Software Developer -IT Co <p>Agricultural Sceences</p></h1>--}}
                                    {{--</td>--}}
                                    {{--<td class="work-time Free">Free lancer</td>--}}
                                    {{--<td><span class="ti-location-pin"></span> Toulouse, France</td>--}}
                                    {{--<td><a href="#" class="table-btn-default">View Job</a></td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection