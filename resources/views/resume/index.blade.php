@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 author">
                        <div class="panel-body">
                            <a href="#"><img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt=""
                                             class="img-responsive"/></a>
                            <div class="job_title">
                                <p></p>
                                Hi, John Anderson
                                <a href="#">UI / UX Graphic Designer</a>
                            </div>
                            <div class="contact_details">
                                <span><i class="fa fa-envelope"></i><a href="#">john.anderson@example.com</a></span>
                                <span><i class="fa fa-phone"></i> +1 800 234 5678</span>
                                <span><i class="fa fa-map-marker"></i> Canada, USA</span>
                            </div>
                        </div>

                        <div class="text-center" style="margin-top: 50px">
                            <a href="{{route('resume.edit')}}" class="btn btn-default">Editeaza CV</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel-body">
                            <div class="page-heading"><h2>Basic Information</h2>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Job Title:</strong> UI/UX Graphic Designer</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Job Type:</strong> Full Time</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Position:</strong>Team Leader</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Job Category:</strong> Designer/Creative</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Experience:</strong> 08 Years</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Salary Package:</strong> 5.40K</span>
                                </div>
                            </div>

                            <div class="job_title">About Me:</div>
                            <div class="page-heading">
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                    Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                    Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper
                                    libero, sit amet adipiscing sem neque sed ipsum. <b class="text-success">Nam quam
                                        nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</b> Maecenas nec odio
                                    et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam
                                    quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                                    mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum
                                    sodales, augue velit cursus nunc, quis gravida magna mi a libero.</p>
                                <blockquote>" Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.
                                    Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla.
                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                    Curae; In ac dui quis mi consectetuer lacinia. "
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                    justo.</p>
                                <div class="borderfull-width"></div>
                            </div>
                            <div class="page-heading">
                                <h2>Education Information</h2>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>New York Academy of Art</strong></span>
                                    <span>UI/UX Graphic Designer</span>
                                    <span>2008 - 2010</span>
                                    <span>B Grade</span>
                                </div>
                                <div class="contact_details col-md-6 p-l">
                                    <span><strong>Graphic Design Institute, Canada</strong></span>
                                    <span>UI/UX Graphic Designer</span>
                                    <span>2008 - 2010</span>
                                    <span>57%</span>
                                </div>
                                <div class="borderfull-width"></div>
                            </div>
                            <div class="page-heading">
                                <h2>Employer/Designntion</h2>
                                <div class="contact_details">
                                    <span><strong>Jobxpress Technologies</strong></span>
                                    <span>Current Employer</span>
                                    <span>Sr, UI/UX Graphic Designer</span>
                                </div>
                            </div>
                            <div class="job_title">Job Profile:</div>
                            <div class="page-heading padding-bottom">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                    nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                    justo. Nullam dictum felis eu pede mollis pretium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection