@if(isset($companies))

    <div class="page-heading">
        <p>{{$companies->total()}} Rezultate</p>
    </div>

    <div class="row">
        @forelse($companies as $index => $company)
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
                        <h4 class="media-heading"><a
                                    href="{{route('companies.index', ['company' => $company->id])}}">{{$company->company_name}}</a>
                        </h4>
                        {{$company->jobs->count()}} anunturi postate
                    </div>
                </div>
            </div>
        </div>

        @empty
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="strong" style="font-weight: 600; font-size: 24px">Nu s-au gasit companii</p>
                </div>
            </div>
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            {{$companies->links()}}
        </div>
    </div>

@endif