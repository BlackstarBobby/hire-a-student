@extends('layouts.app')

@section('content')

    @include('landing_page.search')
    {{--@include('landing_page.banner')--}}
    @include('landing_page.latest_jobs')
    {{--@include('landing_page.categories')--}}
    @include('landing_page.stats')
{{--    @include('landing_page.job_seeker')--}}
    @include('landing_page.find')

@endsection

@section('extraScripts')

    <script>


    </script>

@endsection