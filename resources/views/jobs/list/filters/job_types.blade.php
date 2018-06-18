<div class="job_title">Job Type</div>
<div class="borderfull-width"></div>
<div class="page-heading">
    @if(isset($jobTypes))

        @foreach($jobTypes as $jobType=>$label)
            <div class="category">
                <div class="col-md-1 p-l p-r">
                    <input type="checkbox" name="job_type" value="{{$jobType}}">
                </div>
                <div class="col-md-11 p-l p-r">
                    <label >{{$label}}</label>
                </div>
            </div>
        @endforeach

    @endif
</div>