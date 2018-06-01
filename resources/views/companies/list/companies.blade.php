@if(isset($companies))

    <div class="row">
        @foreach($companies as $index => $company)
            @if($index%4==0 && $index!=0)
                </div>
                <div class="row">
            @endif

            <div class="col-md-3 panel-body">
                <div class="search-company-logo" style='background-image: url("{{$company->logo}}");'>

                </div>
                <a href="{{route('companies.index', ['company' => $company->id])}}">{{$company->company_name}}</a>
            </div>


        @endforeach
    </div>

        <div class="row">
            {{$companies->links()}}
    </div>

@endif