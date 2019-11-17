<section class="section section-jobs-resume">

    <div class="container">
        <div class="row">

            @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
                <div class="col-md-12">
                    <div class="c2a-inner upper text-center mob-margin-bot-30">
                        <h3>Gaseste-ti un job</h3>
                        Gasirea locului de munca potrivit poate fi o provocare dacă nu stiti unde să cautati. Aici
                        suntem experti la a va ajuta sa gasiti job-ul perfect.
                        <div class="c2a-btn">
                            <a href="{{route('job.list')}}" class="btn btn-default">
                                Cauta job-uri </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="c2a-inner upper text-center mob-margin-bot-30">
                        <h3>Post a job</h3>
                        We give you 30 days free post job access, so you can take some time to find the best plan for
                        you.
                        <div class="c2a-btn">
                            <a href="{{route('job.new')}}" class="btn btn-default">
                                Posteaza un anunt </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>