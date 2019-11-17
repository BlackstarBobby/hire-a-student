@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="manage">
            <div class="container">
                <div class="row">
                    {{--<div class="col-md-3">--}}
                    {{--<div class="Resume">--}}
                    {{--<h1>My Account</h1>--}}
                    {{--<ul class="unstyled">--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> My Profile</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> Edit Profile</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> Notifications</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> Favorite Candidates</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> Manage Jobs</a></li>--}}
                    {{--<li class="active"><a href="#"><i class="fa fa-caret-right"></i> Manage Applications</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-caret-right"></i> Change Password</a></li>--}}
                    {{--<li class="border-none"><a href="#"><i class="fa fa-caret-right"></i> Sign Out</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="job_title">Manage Applications</div>

                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
                                @include('jobs.applications.user_applications')
                            @else
                                @include('jobs.applications.company_applications')
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection