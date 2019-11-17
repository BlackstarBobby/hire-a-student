<section id="pixel-slider" class="pixel-slider section-parallax">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="slider-content">

                    <div class="site-tagline calltoaction-block text-center">

                        <h1>EXPLOREAZA O MULTITUDINE DE JOB-URI</h1>
                        <h3>VANATOAREA DE JOB-URI PENTRU STUDENTI MAI SIMPLA CA NICIODATA</h3>

                        {{--<div class="c2a-btn">--}}
                            {{--<div class="btn-group btn-group-lg" role="group" aria-label="Call to action">--}}
                                {{--<a type="button" class="btn btn-default btn-lg"--}}
                                   {{--href="https://demo.codethemes.co/robojob/find-a-job">Find a job</a>--}}
                                {{--<span class="btn-circle btn-or">or</span>--}}
                                {{--<a type="button" class="btn btn-primary btn-lg"--}}
                                   {{--href="https://demo.codethemes.co/robojob/post-a-job">Post a job</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                    <!-- End Calltoaction Block -->

                    <!-- Add 'job-shortcode' class if you are using the shortcode instead of
                    custom form. -->
                    <div class="search-filter-wrap">

                        <div class="job_listings">

                            <form class="job_filters" method="GET"
                                  action="{{route('job.list')}}">
                                <div class="search_jobs">

                                    <div class="search_keywords">
                                        <label for="search_keywords">Keywords</label>
                                        <input type="text" id="search_keywords" name="keywords"
                                               placeholder="Cauta job-uri">
                                    </div>
                                    <div class="search_submit">
                                        <input type="submit" value="CAUTA">
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- End Slide Content -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container-->

</section>