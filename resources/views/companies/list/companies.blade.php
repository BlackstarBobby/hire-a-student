@if(isset($companies))

    <div class="row">
        @foreach($companies as $index => $company)
            @if($index%3==0 && $index!=0)
    </div>
    <div class="row">
        @endif

        <div class="panel col-md-4 company-panel">
            <div class="panel-body">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img class="media-object company-search-logo" src="{{$company->logo}}" alt="...">
                        </a>
                    </div>
                    <div class="media-body text-center">
                        <h4 class="media-heading"><a href="{{route('companies.index', ['company' => $company->id])}}">{{$company->company_name}}</a></h4>
                        {{$company->jobs->count()}} anunturi postate
                    </div>
                </div>
            </div>
        </div>


        {{--<div class="col-md-2 panel-body company-container">--}}
            {{--<div class=" tab-image company-logo-container">--}}
                {{--<img class="img-responsive company-search-logo" src="{{$company->logo}}" alt="">--}}
            {{--</div>--}}
            {{--<div class="">--}}
                {{--<a href="{{route('companies.index', ['company' => $company->id])}}">{{$company->company_name}}</a>--}}

            {{--</div>--}}
            {{--<div class="">--}}
                {{--<span class="jobs-number"> {{$company->jobs->count()}} anunturi postate</span>--}}
            {{--</div>--}}
        {{--</div>--}}


        @endforeach
    </div>

    <div class="row">
        {{$companies->links()}}
    </div>

@endif