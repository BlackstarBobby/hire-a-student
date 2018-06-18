<div class="col-md-7 col-sm-7 p-l">
    <div class="page-heading">
        <p>{{$candidates->total() ?? null}} Results</p>
    </div>
</div>
{{--<div class="col-md-5 col-sm-5 filter p-r text-right">--}}
{{--<div class="col-md-7 col-sm-5"><p>Short by:</p></div>--}}
{{--<div class="col-md-5 col-sm-7 p-r">--}}
{{--<div class="dropdown">--}}
{{--<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">By Default <span--}}
{{--class="caret"></span></button>--}}
{{--<ul class="dropdown-menu pull-right">--}}
{{--<li><a href="#">Executive</a></li>--}}
{{--<li><a href="#">SEO</a></li>--}}
{{--<li><a href="#">Java Developer</a></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


<div class="clearfix"></div>
<div class="page_listing candidate">

    @if(isset($candidates))
        @foreach($candidates as $candidate)
            <div class="sorting_content">
                <div class="tab-image"><img src="{{$candidate->avatar}}" alt=""
                                            class="img-responsive"></div>
                <div class="overflow">
                    <div class="text-shorting">
                        <h1>{{$candidate->first_name . ' '. $candidate->last_name}}</h1>
                        {{--<ul class="unstyled">--}}
                        {{--<li>UI/UX Developer</li>--}}
                        {{--<li><span><strong>Rate : </strong> <i class="fa fa-money"></i> $100 / Hour</span></li>--}}
                        {{--</ul>--}}
                        <p></p>
                    </div>
                    <?php $resume = json_decode($candidate->resume->resume, true)?>
                    <div class="bottom_text">
                        <div class="contact_details col-md-4 col-sm-4 p-l">
                            <span><strong>Adresa:</strong> {{$resume['basic']['address']}}</span>
                        </div>
                        <div class="contact_details col-md-8 col-sm-8 p-l">
                            <span><strong>Skills:</strong>  PHP, Html, JavaScript, jQuery, CSS, MySQL, Wordpress</span>
                        </div>
                        <p></p>
                        <p class="col-md-12 p-l">
                            {{substr($resume['description'],0,255) . '...'}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


</div>
<div class="row">
    <div class="col-md-12">
        {{$candidates->links() ?? null}}
    </div>
</div>