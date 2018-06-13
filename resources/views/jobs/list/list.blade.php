@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('jobs.list.filters')
                    </div>
                    <div class="col-md-9 jobs-container">
                        @include('jobs.list.jobs')
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('extraScripts')
    <script>

        function bindFilters() {
            $('[type="checkbox"]').each(function () {
                $(this).on('click', function () {
                    triggerRequest();
                });
            });

            $('input[name="search_bar"]').on('keyup', function (e) {
                if (typeof window.studentSearch !== undefined) {
                    clearTimeout(window.studentSearch);
                }

                window.studentSearch = setTimeout(function () {
                    triggerRequest();
                }, 1000);

            });
        }

        function gatherFilters() {
            let words = '';
            let jobTypes = [];
            let salary = [];

            $('input[name="job_type"]:checked').each(function () {
                jobTypes.push($(this).val());
            });

            $('input[name="salary"]:checked').each(function () {
                salary.push($(this).val());
            });

            let search = $('input[name="search_bar"]').first().val().trim();
            words = search.length ? search : [];

            let data = {
                keywords: words,
                jobTypes: jobTypes,
                salary: salary
            };

            return data;
        }

        function triggerRequest() {
            let data = gatherFilters();
            console.log(data);
            $.ajax({
                url: '/jobs',
                method:"GET",
                data: data,
                success: function (response) {
                    
                },
                error: function () {
                    
                }
            })
        }

        $(document).ready(function () {
            bindFilters();
        });

    </script>
@endsection