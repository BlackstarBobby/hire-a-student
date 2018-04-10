@include('layouts.header')

<input type="hidden" name="_token" value="{{ csrf_token() }}">

@yield('content')

@include('layouts.footer')