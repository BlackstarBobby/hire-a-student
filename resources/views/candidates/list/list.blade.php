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

@section('extraScripts')

    <script>

        function bindFilters() {
            $('[type="checkbox"]').each(function () {
                $(this).on('click', function () {
                    triggerRequest();
                });
            });

            $('input[name="abilities"]').on('keyup', function (e) {
                if (typeof window.candidateSearch1 !== undefined) {
                    clearTimeout(window.candidateSearch1);
                }

                window.candidateSearch1 = setTimeout(function () {
                    triggerRequest();
                }, 1000);

            });

            $('input[name="address"]').on('keyup', function (e) {
                if (typeof window.candidateSearch2 !== undefined) {
                    clearTimeout(window.candidateSearch2);
                }

                window.candidateSearch2 = setTimeout(function () {
                    triggerRequest();
                }, 1000);

            });

            $(document).on('click', 'a.page-link', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('here');
                let page = $(this).text();

                $('.page-item').removeClass('active');
                $(this).parent().addClass('active');

                triggerRequest();
            });
        }

        function gatherFilters() {
            let abilities = '';
            let address = '';
            let candidateJobTypes = [];

            $('input[name="candidate_job_type"]:checked').each(function () {
                candidateJobTypes.push($(this).val());
            });

            let abilitiesSearch = $('input[name="abilities"]').first().val().trim();
            abilities = abilitiesSearch.length ? abilitiesSearch : [];

            let addressSearch = $('input[name="address"]').first().val().trim();
            address = addressSearch.length ? addressSearch : [];

            let data = {
                abilities: abilities,
                address: address,
                candidateJobType: candidateJobTypes
            };

            let page = getPage();
            if (page) {
                data.page = page;
            }

            return data;
        }

        function getPage() {
            let pageItem = $('.page-item.active');
            if (pageItem.length) {
                return pageItem.text();
            }
            return false;
        }

        function triggerRequest() {
            let data = gatherFilters();

            $.ajax({
                url: '/candidates',
                method: "GET",
                data: data,
                success: function (html) {
                    $('.candidates-container').html(html);
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