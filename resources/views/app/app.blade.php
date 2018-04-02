@include('app.header.header')

<input type="hidden" name="_token" value="{{ csrf_token() }}">

@yield('content')

@include('app.footer.footer')