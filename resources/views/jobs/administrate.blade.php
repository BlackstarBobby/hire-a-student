@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="manage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="job_title">Administreaza job-urile</div>
                            <table class="table">
                                <thead class="">
                                <tr>
                                    <th>Titlul Job-ului</th>
                                    <th>Tipul Job-ului</th>
                                    <th>Aplicanti</th>
                                    <th>Actiune</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($jobs))
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>
                                                <h1>
                                                    <a href="{{route('job.index', ['comapnyJob' => $job->id])}}"> {{$job->title}}</a>
                                                </h1>
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
                                                <td class="work-time text-center project text-center">Project</td>
                                                @break

                                                @case(\App\Models\CompanyJob::INTERNSHIP)
                                                <td class="work-time text-center internship-job text-center">
                                                    Internship
                                                </td>
                                                @break
                                            @endswitch
                                            <td><strong>{{$job->applicants->count() ?? 0}} </strong>
                                            </td>
                                            <td>
                                                {{--<span><i class="fa fa-pencil"></i></span> --}}
                                                <a href="{{route('job.delete', ['companyJob' => $job->id])}}"><span><i class="fa fa-trash"></i></span></a>
                                            {{--<span><i class="fa fa-ban"></i></span></td>--}}
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
