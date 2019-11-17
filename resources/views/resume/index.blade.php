@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume2">
            <div class="container">
                <div class="row">

                    <?php $resumeDetails = json_decode($resume->resume, 1)  ?>

                    <div class="col-md-3 author">
                        <div class="panel-body">
                            <a href="#"><img src="{{$resume->user->avatar ?? null}}" alt=""
                                             class="img-responsive"/></a>
                            <div class="job_title">
                                <p></p>
                                {{$resume->user->first_name . ' ' . $resume->user->last_name}}
                                <a href="#">{{$resume->user->title ?? null}}</a>
                            </div>
                            <div class="contact_details">
                                <span><i class="fa fa-envelope"></i><a
                                            href="#">{{$resume->user->email ?? null}}</a></span>
                                <span><i class="fa fa-phone"></i>{{$resumeDetails['basic']['phone'] ?? null}}</span>
                                <span><i class="fa fa-map-marker"></i>{{$resumeDetails['basic']['address'] ?? null}}</span>
                            </div>
                        </div>

                        <div class="text-center" style="margin-top: 50px">
                            <a href="{{route('resume.edit')}}" class="btn btn-default">Editeaza CV</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel-body">

                            <div class="job_title">Despre mine:</div>
                            <div class="page-heading">
                                {!! $resumeDetails['description'] ?? null !!}
                                <div class="borderfull-width"></div>
                            </div>
                            <div class="page-heading">
                                <h2>Educatie</h2>
                                @if(isset($resumeDetails['education'] ))
                                    <?php $index = 0; ?>
                                    @foreach($resumeDetails['education'] as $key => $school)
                                        <div class="contact_details col-md-12">
                                            <span>{{$school['institution'][$index] ?? null}}</span>
                                            <span>{{$school['specialization'][$index] ?? null}}</span>
                                            <span>{{$school['type'][$index] ?? null}}</span>
                                            <span>{{$school['city'][$index] ?? null}}</span>
                                            <span>{{($school['start'][$index] ?? null) . ' - ' . ($school['end'][$index] ?? null)}}</span>
                                        </div>

                                        <?php $index = $index + 1; ?>
                                    @endforeach
                                @endif

                                <div class="borderfull-width"></div>
                            </div>
                            <div class="page-heading">
                                <h2>Experienta</h2>
                                <div class="contact_details">

                                    @if(isset($resumeDetails['experience'] ))
                                        <?php $index = 0; ?>
                                        @foreach($resumeDetails['experience'] as $key => $job)
                                            <div class="contact_details col-md-12">
                                                <span>{{$job['institution'][$index] ?? null}}</span>
                                                <span>{{$job['position'][$index] ?? null}}</span>
                                                <span>{{$job['location'][$index] ?? null}}</span>
                                                <span>{!! $job['description'][$index] ?? null !!}</span>
                                                <span>{{$job['start'][$index] ?? null . ' - ' . (($job['end'][$index] ?? $job['present'][$index]) ?? null)}}</span>
                                            </div>

                                            <?php $index = $index + 1; ?>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="page-heading">
                                <h2>Abilitati</h2>
                                <div class="contact_details">
                                    <p>{!! $resumeDetails['abilities'] ?? null !!}</p>
                                </div>
                            </div>
                            {{--<div class="job_title">Job Profile:</div>--}}
                            {{--<div class="page-heading padding-bottom">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget--}}
                            {{--dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,--}}
                            {{--nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium--}}
                            {{--quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet--}}
                            {{--nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,--}}
                            {{--justo. Nullam dictum felis eu pede mollis pretium.</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection