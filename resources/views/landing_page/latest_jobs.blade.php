<section class="job-widget section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Ultimele job-uri</h3>
            </div>
            <div class="col-md-12">
                <div class="switch_layout_featured_company_load_more shortcode-wrap">
                    <div class="view-switch">
                        <!-- Switch Views -->
                        {{--<div class="switch-wrap">--}}
                        {{--<ul id="view-switch" name="view-switch" class="nav nav-tabs">--}}
                        {{--<li class="active">--}}
                        {{--<a href="#list-view" id="list-view-switch" name="list-view-switch"--}}
                        {{--data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i--}}
                        {{--class="fa fa-list-ul"></i></a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="#grid-view" id="grid-view-switch" name="grid-view-switch"--}}
                        {{--data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i--}}
                        {{--class="fa fa-th"></i></a>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="list-view">
                                <div class="job_listings" id="more-jobs">
                                    <ul class="job_listings ps-container ps-theme-default ps-active-y">

                                        @if(isset($jobs))
                                            @foreach($jobs as $job)
                                                <li class="job_listing job-type-full-time "
                                                    style="width: 100%; left: 0px;">
                                                    <a href="{{route('job.index', ['companyJob' => $job->id])}}">
                                                        <img class="company_logo"
                                                             src="{{$job->company->logo}}"
                                                             alt="asdfasdf">
                                                        <div class="position">
                                                            <h3>{{$job->title ?? null}}</h3>
                                                            <div class="company">
                                                                <strong>{{$job->company->company_title ?? null}}</strong><span
                                                                        class="tagline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="location">{{$job->city}}</div>
                                                        <ul class="meta">
                                                            <li class="job-type full-time"> {{$job->getJobTypeLabel($job->job_type)}}</li>
                                                        </ul>
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif


                                        {{--<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: -35px;">--}}
                                            {{--<div class="ps-scrollbar-x" tabindex="0"--}}
                                                 {{--style="left: 0px; width: 0px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="ps-scrollbar-y-rail" style="top: 38px; height: 448px; right: 3px;">--}}
                                            {{--<div class="ps-scrollbar-y" tabindex="0"--}}
                                                 {{--style="top: 36px; height: 412px;"></div>--}}
                                        {{--</div>--}}
                                    </ul>

                                    <a class="load_more_jobs" id="load_more_robojobs" href="{{route('job.list')}}"
                                       ><strong>Vezi mai multe job-uri</strong></a>
                                </div>

                                <!-- End Job Listings -->
                            </div><!-- End tabpanel -->
                        </div><!-- End tab-content -->
                    </div>
                </div>

            </div>
            <!-- End Column -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
</section>