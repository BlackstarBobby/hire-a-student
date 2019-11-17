<div class="job-search">
    <div class="form-group">
        <input type="text" name="abilities" class="form-control" placeholder="Abilitati">
        <div class="search_icon"><span class="ti-medall-alt"></span></div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Oras / Adresa">
        <div class="search_icon"><span class="ti-location-pin"></span></div>
    </div>
</div>


<div class="job_title">Tipul job-ului</div>
<div class="borderfull-width"></div>
<div class="page-heading">
    @if(isset($jobTypes))

        @foreach($jobTypes as $jobType=>$label)
            <div class="category">
                <div class="col-md-1 p-l p-r">
                    <input type="checkbox" name="candidate_job_type" value="{{$jobType}}">
                </div>
                <div class="col-md-11 p-l p-r">
                    <label >{{$label}}</label>
                </div>
            </div>
        @endforeach

    @endif
</div>
