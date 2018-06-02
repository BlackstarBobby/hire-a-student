<li class="dropdown user-dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-dropdown-img"
                                                                    src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}"
                                                                    alt=""> <i class="fa fa-angle-down"></i></a>
    <ul class="dropdown-menu">
        <li><a href="{{route('user.index')}}">Vezi Profil</a></li>
        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('candidate'))
            <li><a href="{{route('user.edit')}}" class="login">Editeaza profilul</a></li>
        @else
            <li><a href="{{route('companies.edit', ['company' => ''])}}" class="login">Editeaza profilul</a></li>
        @endif
        <li><a href="{{route('logout')}}" class="login">Log Out</a></li>
    </ul>
</li>
