@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('candidates.list.filters')
                    </div>
                    <div class="col-md-9 candidates-container">
                        @include('candidates.list.candidates')
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection