<section class="section section-bg section-counter section-light ">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="count-holder text-center">
                    <div class="counter-wrap">
                        <i class="ion-briefcase" aria-hidden="true"></i>
                        <h1 class="counter-js" data-from="0" data-to="{{$totalJobs ?? 0}}" data-speed="5000" data-refresh-interval="50">{{$totalJobs ?? 0}}</h1>
                    </div>
                    <div class="counter-info">
                        <h4>Job-uri</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="count-holder text-center">
                    <div class="counter-wrap">
                        <i class="ion-clipboard" aria-hidden="true"></i>
                        <h1 class="counter-js" data-from="0" data-to="{{$totalResumes ?? 0}}" data-speed="5000" data-refresh-interval="50">{{$totalResumes ?? 0}}</h1>
                    </div>
                    <div class="counter-info">
                        <h4>CV-uri</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="count-holder text-center">
                    <div class="counter-wrap">
                        <i class="ion-android-people" aria-hidden="true"></i>
                        <h1 class="counter-js" data-from="0" data-to="{{$totalUsers ?? 0}}" data-speed="5000" data-refresh-interval="50">{{$totalUsers ?? 0}}</h1>
                    </div>
                    <div class="counter-info">
                        <h4>Membri</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="count-holder text-center">
                    <div class="counter-wrap">
                        <i class="ion-home" aria-hidden="true"></i>
                        <h1 class="counter-js" data-from="0" data-to="{{$totalCompanies ?? 0}}" data-speed="5000" data-refresh-interval="50">{{$totalCompanies ?? 0}}</h1>
                    </div>
                    <div class="counter-info">
                        <h4>Compani</h4>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
</section>