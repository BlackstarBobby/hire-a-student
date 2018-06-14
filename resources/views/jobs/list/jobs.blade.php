<div class="col-md-7 col-sm-7 p-l">
    <div class="page-heading">
        <p>{{$jobs->total()}} Results</p>
    </div>
</div>
<div class="col-md-5 col-sm-5 filter p-r text-right">
    <div class="col-md-7 col-sm-5"><p>Short by:</p></div>
    <div class="col-md-5 col-sm-7 p-r">
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
                Recent Jobs
                <span class="caret"></span></button>
            <ul class="dropdown-menu pull-right">
                <li><a href="#">Web Developer</a></li>
                <li><a href="#">MySQL Developers</a></li>
                <li><a href="#">Web Designer</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="page_listing">
    @foreach($jobs as $job)
        <div class="sorting_content">
            <div class="tab-image"><img src="{{$job->company->logo ?? null}}" alt=""
                                        class="img-responsive jobs-search-logo"></div>
            <div class="overflow">
                <div class="text-shorting">
                    <h1 class="col-md-6 col-sm-7">
                        <a href="{{route('job.index', ['companyJob' => $job->id])}}">{{$job->title}}</a>
                        <p>
                            <a href="{{route('companies.index', ['company' => $job->company->id])}}">{{$job->company->company_name}}</a>
                        </p>
                    </h1>
                    @switch($job->job_type)
                        @case(\App\Models\CompanyJob::FULL_TIME)
                        <div class="work-time text-center col-md-2"> Full Time</div>
                        @break

                        @case(\App\Models\CompanyJob::PART_TIME)
                        <div class="work-time part text-center col-md-2"> Part Time</div>
                        @break

                        @case(\App\Models\CompanyJob::FREELANCER)
                        <div class="work-time Free text-center col-md-2"> Freelancer</div>
                        @break

                        @case(\App\Models\CompanyJob::PRACTICE)
                        <div class="work-time practice text-center col-md-2"> Practice</div>
                        @break

                        @case(\App\Models\CompanyJob::VOLUNTEER)
                        <div class="work-time volunteer text-center col-md-2"> Volunteer</div>
                        @break

                        @case(\App\Models\CompanyJob::PROJECT)
                        <div class="work-time project text-center col-md-2">Project</div>
                        @break
                    @endswitch

                </div>
                <div class="bottom_text">
                    <div class="contact_details col-md-4 col-sm-4">
                                                <span><strong>Sallery: <i
                                                                class="fa fa-money"></i></strong> {{$job->salary}}</span>
                    </div>
                    {{--<div class="contact_details col-md-8 col-sm-8">--}}
                    {{--<span><strong>Skills:</strong> Desinger, Developer, Html, Javascript, Jquery, CSS</span>--}}
                    {{--</div>--}}
                    <p class="col-md-12">
                        {{substr($job->description,0,255) . '...'}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
<ul class="pagination pull-right">
    {{--<li class="active"><a href="#"><i class="fa fa-angle-left"></i></a></li>--}}
    {{--<li><a href="#">1</a></li>--}}
    {{--<li><a href="#">2</a></li>--}}
    {{--<li><a href="#">3</a></li>--}}
    {{--<li><a href="#">4</a></li>--}}
    {{--<li><a href="#">...</a></li>--}}
    {{--<li><a href="#">20</a></li>--}}
    {{--<li class="active"><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
    {{ $jobs->links() }}
</ul>