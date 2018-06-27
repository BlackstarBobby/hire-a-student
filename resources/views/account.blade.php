<li class="dropdown user-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-dropdown-img"
                            @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
                            src="{{url(\Illuminate\Support\Facades\Auth::user()->avatar)}}"
                            @else
                            src="{{url(\Illuminate\Support\Facades\Auth::user()->company->logo)}}"
                            @endif

                                                                    alt=""> <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
            <li><a href="{{route('resume')}}">Vezi Profil</a></li>
        @else
            <li><a href="{{route('companies.profile')}}">Vezi Profil</a></li>
        @endif

        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
            <li><a href="{{route('resume.edit')}}" class="login">Editeaza profilul</a></li>
        @else
            <li>
                <a href="{{route('companies.edit', ['company' => \Illuminate\Support\Facades\Auth::user()->company->id])}}"
                   class="login">Editeaza profilul</a></li>
            <li><a href="{{route('job.new')}}" class="login">Posteaza job nou</a></li>
            <li><a href="{{route('job.administrate')}}" class="login">Administreaza job-urile</a></li>
        @endif
        <li><a href="{{route('job.application')}}" class="login">Administreaza aplicarile</a></li>
        <li><a href="{{route('logout')}}" class="login">Log Out</a></li>
    </ul>
</li>
