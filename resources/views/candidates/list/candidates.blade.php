<div class="col-md-7 col-sm-7 p-l">
    <div class="page-heading">
        <p>{{$candidates->total() ?? null}} Results</p>
    </div>
</div>

<div class="clearfix"></div>
<div class="page_listing candidate">


    @forelse($candidates as $candidate)
    <div class="sorting_content">
        <div class="tab-image"><img src="{{$candidate->avatar}}" alt=""
                                    class="img-responsive"></div>
        <div class="overflow">
            <div class="text-shorting">
                <h1>
                    <a href="{{route('user.resume', ['user' => $candidate->id])}}">{{$candidate->first_name . ' '. $candidate->last_name}}</a>
                </h1>
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
                    @if(isset($resume['abilities']))
                        <span><strong>Skills:</strong> {{$resume['abilities']}}</span>
                    @endif
                </div>
                <p></p>
                <p class="col-md-12 p-l">
                    {{substr($resume['description'],0,255) . '...'}}
                </p>
            </div>
        </div>
    </div>

    @empty
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="strong" style="font-weight: 600; font-size: 24px">Nu s-au gasit candidati</p>
            </div>
        </div>
    @endforelse


</div>
<div class="row">
    <div class="col-md-12">
        {{$candidates->links() ?? null}}
    </div>
</div>