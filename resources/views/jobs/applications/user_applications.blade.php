<table class="table">
    <thead class="">
    <tr>
        <th>Nume Companie</th>
        <th>Titlu Job</th>
        <th>Tipul Jobului</th>
        <th>Raspuns</th>
    </tr>
    </thead>
    <tbody>

    @if(isset($applications))
        @foreach($applications as $job)
            {{--            @foreach($job->applicants as $candidate)--}}
            <tr>
                <td>
                    <div class="col-md-4 col-sm-4 p-l p-r"><img
                                src="{{$job->company->logo}}" alt=""
                                class="img-responsive" width="70" height="70"></div>
                    <div class="overflow col-md-8 col-sm-8 p-l">
                        <div class="text-shorting">
                            <h1>{{$job->company->company_name}} </h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{--<div class="bottom-text"><a href="#"><i class="fa fa-eye"></i> Click to View--}}
                    {{--Message</a></div>--}}
                </td>
                <td style="vertical-align: text-top;"><h1>{{$job->title}} </h1>
                </td>

                @switch($job->job_type)
                    @case(\App\Models\CompanyJob::FULL_TIME)
                    <td class="work-time text-center">{{$jobTypes[$job->job_type]}}</td>
                    @break

                    @case(\App\Models\CompanyJob::PART_TIME)
                    <td class="work-time text-center part">{{$jobTypes[$job->job_type]}}</td>
                    @break

                    @case(\App\Models\CompanyJob::FREELANCER)
                    <td class="work-time text-center Free">{{$jobTypes[$job->job_type]}}</td>
                    @break

                    @case(\App\Models\CompanyJob::PRACTICE)
                    <td class="work-time text-center practice">{{$jobTypes[$job->job_type]}}</td>
                    @break

                    @case(\App\Models\CompanyJob::VOLUNTEER)
                    <td class="work-time text-center volunteer">{{$jobTypes[$job->job_type]}}</td>
                    @break

                    @case(\App\Models\CompanyJob::PROJECT)
                    <td  class="work-time text-center project text-center ">Proiect</td>
                    @break

                    @case(\App\Models\CompanyJob::INTERNSHIP)
                    <td  class="work-time text-center internship-job text-center ">Internship</td>
                    @break
                    @endswitch

                    <td style="vertical-align: text-top;">In asptetare</td>
            </tr>
            {{--@endforeach--}}
        @endforeach

    @endif
    </tbody>
</table>