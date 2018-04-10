@extends('layouts.app')

@section('content')

    <main id="maincontent">


        <div class="banner-content text-center">
            <h1 style="color: #000000">Website in progress</h1>
        </div>

        <div class="banner-content text-center">
            <h1 style="color: #000000">
                Hello, @if(\Illuminate\Support\Facades\Auth::user()) {{\Illuminate\Support\Facades\Auth::user()->name}} @else
                    Stranger @endif</h1>
        </div>


    </main>
@endsection

@section('extraScripts')
@endsection