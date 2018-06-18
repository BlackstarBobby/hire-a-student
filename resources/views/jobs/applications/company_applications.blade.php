<table class="table">
    <thead class="">
    <tr>
        <th>Candidate Name</th>
        <th>Job Title</th>
        <th>Resume</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    @if(isset($applications))
        @foreach($applications as $job)
            @foreach($job->applicants as $candidate)
                <tr>
                    <td>
                        <div class="col-md-4 col-sm-4 p-l p-r"><img
                                    src="{{$candidate->avatar}}" alt=""
                                    class="img-responsive" width="70" height="70"></div>
                        <div class="overflow col-md-8 col-sm-8 p-l">
                            <div class="text-shorting">
                                <h1>{{$candidate->last_name . ' '.$candidate->first_name}} </h1>
                                <p></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        {{--<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View--}}
                        {{--Message</a></div>--}}
                    </td>
                    <td style="vertical-align: text-top;"><h1>{{$job->title}} </h1>
                    </td>
                    <td style="vertical-align: text-top;"><a href="{{route('resume')}}"><i class="fa fa-file-pdf-o"></i>
                            {{"CV " . $candidate->last_name}}</a></td>
                    <td style="vertical-align: text-top;"><span><i class="fa fa-check"></i></span>
                        <span><i class="fa fa-trash"></i></span></td>
                </tr>
            @endforeach
        @endforeach

    @endif
    </tbody>
</table>