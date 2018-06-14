@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="employe_list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="job-search company_search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name"
                                               name="search_bar">
                                        <div class="search_icon"><span class="ti-search"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs2">
                                    <li class="active"><a href="" class="companies-search-reset">Top</a></li>
                                    <li><a class="companies-search-letter" href="">A</a></li>
                                    <li><a class="companies-search-letter" href="">B</a></li>
                                    <li><a class="companies-search-letter" href="">C</a></li>
                                    <li><a class="companies-search-letter" href="">D</a></li>
                                    <li><a class="companies-search-letter" href="">E</a></li>
                                    <li><a class="companies-search-letter" href="">F</a></li>
                                    <li><a class="companies-search-letter" href="">G</a></li>
                                    <li><a class="companies-search-letter" href="">H</a></li>
                                    <li><a class="companies-search-letter" href="">I</a></li>
                                    <li><a class="companies-search-letter" href="">J</a></li>
                                    <li><a class="companies-search-letter" href="">K</a></li>
                                    <li><a class="companies-search-letter" href="">L</a></li>
                                    <li><a class="companies-search-letter" href="">M</a></li>
                                    <li><a class="companies-search-letter" href="">N</a></li>
                                    <li><a class="companies-search-letter" href="">O</a></li>
                                    <li><a class="companies-search-letter" href="">P</a></li>
                                    <li><a class="companies-search-letter" href="">Q</a></li>
                                    <li><a class="companies-search-letter" href="">R</a></li>
                                    <li><a class="companies-search-letter" href="">S</a></li>
                                    <li><a class="companies-search-letter" href="">T</a></li>
                                    <li><a class="companies-search-letter" href="">U</a></li>
                                    <li><a class="companies-search-letter" href="">V</a></li>
                                    <li><a class="companies-search-letter" href="">W</a></li>
                                    <li><a class="companies-search-letter" href="">X</a></li>
                                    <li><a class="companies-search-letter" href="">Y</a></li>
                                    <li><a class="companies-search-letter" href="">Z</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content companies-container">
                            @include('companies.list.companies')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('extraScripts')
    <script>
        function bindEvents() {
            $('.companies-search-letter').on('click', function (e) {
                e.preventDefault();
                letterSearch($(this).text());
            });

            $('input[name="search_bar"]').on('keyup', function (e) {
                if (typeof window.studentCompaniesSearch !== undefined) {
                    clearTimeout(window.studentCompaniesSearch);
                }

                window.studentCompaniesSearch = setTimeout(function () {
                    keyWordsSearch();
                }, 1000);

            });
        }

        function letterSearch(letter) {
            let data = {companyLetter: letter};
            triggerRequest(data);
        }

        function keyWordsSearch() {
            let search = $('input[name="search_bar"]').first().val().trim();
            words = search.length ? search : [];

            let data = {companySearch: words};
            triggerRequest(data);
        }

        function triggerRequest(data) {
            $.ajax({
                url: '/companies',
                method: "GET",
                data: data,
                success: function (html) {
                    $('.companies-container').html(html);
                },
                error: function () {

                }
            })
        }

        $(document).ready(function () {
            bindEvents();
        });

    </script>
@endsection