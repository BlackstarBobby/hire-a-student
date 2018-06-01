@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <div class="col-md-3 p-l">
                            <div class="block">
                                <img src="{{$company->logo}}" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="job_title">
                                {{$company->company_name}}
                            </div>
                            <a href="https://www.facebook.com/" target="blank" class="user-media"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com" target="blank" class="user-media twitter"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="http://www.linkedin.com/" target="blank" class="user-media linke"><i
                                        class="fa fa-linkedin"></i></a>
                            <a href="https://mail.google.com/" target="blank" class="user-media google"><span
                                        class="ti-google"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact_details">
                            <span><i class="fa fa-map"></i> {{$company->location}}</span>
                            <span><i class="fa fa-phone"></i> {{$company->phone}}</span>
                            <span><i class="fa fa-envelope"></i><a href="#">{{$company->email}}</a></span>
                            <span><i class="fa fa-globe"></i><a href="#">{{$company->website}}</a></span>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel-body">
                            {{--<div class="page-heading">--}}
                                {{--<h2>Company Overview</h2>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget--}}
                                    {{--dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,--}}
                                    {{--nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium--}}
                                    {{--quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet--}}
                                    {{--nec, vulputate eget, arcu.</p>--}}
                                {{--<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis--}}
                                    {{--eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper--}}
                                    {{--nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat--}}
                                    {{--vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,--}}
                                    {{--tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean--}}
                                    {{--imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam--}}
                                    {{--eget dui. Etiam rhoncus.</p>--}}
                            {{--</div>--}}
                            {{--<div class="page_details">--}}
                                {{--<h4>Business Details : </h4>--}}
                                {{--<p>One may need to manage more than one design brief at a time and typical activities--}}
                                    {{--include: </p>--}}
                                {{--<p>- Talking with clients or account managers to discuss the business objectives and--}}
                                    {{--requirements of the job; </p>--}}
                                {{--<p>- Estimating the time required to complete the work and providing quotes for--}}
                                    {{--clients;</p>--}}
                                {{--<p>- Developing design briefs that suit the client's purpose; </p>--}}
                                {{--<p>- Thinking creatively to produce new ideas and concepts and developing interactive--}}
                                    {{--design; </p>--}}
                                {{--<p>- Using innovation to redefine a design brief within the constraints of cost and--}}
                                    {{--time; </p>--}}
                                {{--<p>- Presenting finalized ideas and concepts to clients or account managers; </p>--}}
                                {{--<p>- Working with a range of media, including computer-aided design (CAD) and keeping up--}}
                                    {{--to date with emerging technologies; </p>--}}
                                {{--<p>- Proofreading to produce accurate and high-quality work; </p>--}}
                                {{--<p>- Demonstrating illustrative skills with rough sketches and working on layouts ready--}}
                                    {{--for print; </p>--}}
                                {{--<p>- Commissioning illustrators and photographers; </p>--}}
                                {{--<p>- Working as part of a team with printers, copywriters, photographers, stylists,--}}
                                    {{--illustrators and marketing specialists. </p>--}}
                            {{--</div>--}}
                            {{--<div class="page_details">--}}
                                {{--<h4>What We Do : </h4>--}}
                                {{--<p>- Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>--}}
                                {{--<p>- Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate--}}
                                    {{--eleifend tellus.</p>--}}
                                {{--<p>- Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur--}}
                                    {{--ullamcorper ultricies nisi.</p>--}}
                                {{--<p>- Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet--}}
                                    {{--neque sed ipsum.</p>--}}
                                {{--<p>- Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio--}}
                                    {{--et ante tincidunt tempus.</p>--}}
                            {{--</div>--}}

                            <div class="page_details">
                                {{$company->description}}
                            </div>
                            <a href="#" class="btn btn-default">Contact Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel-body">
                            <div class="job_title block1">
                                Contact IFW Media
                            </div>
                            <p></p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="phone Number">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <a href="#" class="btn btn-default btn-block">Submit Message</a>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106051.59692771109!2d-117.91613952342153!3d33.83521175031485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd6f98055e867%3A0x1ab89ab9a2bb160!2sAnaheim%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1493815696478"
                                    width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection