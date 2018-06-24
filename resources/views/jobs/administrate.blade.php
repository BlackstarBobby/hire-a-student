@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="manage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="job_title">Manage Applications</div>
                            <table class="table">
                                <thead class="">
                                <tr>
                                    <th>Job Title</th>
                                    <th>Job Type</th>
                                    <th>Applications</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($jobs))
                                    @foreach($jobs as $job)
                                        <tr>
                                            <td>
                                                <h1>{{$job->title}}</h1>
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
                                            @endswitch
                                            <td><strong>{{$job->applicants->count() ?? 0}} <span class="text-success">(Manage)</span></strong></td>
                                            <td><span><i class="fa fa-pencil"></i></span> <span><i
                                                            class="fa fa-trash"></i></span> <span><i
                                                            class="fa fa-ban"></i></span></td>
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
