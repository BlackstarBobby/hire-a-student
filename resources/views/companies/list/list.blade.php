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
                                        <input type="text" class="form-control" placeholder="Cauta Companii"
                                               name="search_bar">
                                        <div class="search_icon"><span class="ti-search"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs2 ul-letters">
                                    <li class="active"><a href="" class="companies-search-reset">Toate</a></li>
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
            $('.companies-search-reset').on('click', function (e) {
                e.preventDefault();
                let $this = $(this);

                $('.ul-letters').find('li').removeClass('active');
                $this.parent().addClass('active');

                $('input[name="search_bar"]').val('');

                letterSearch('');
            });

            $('.companies-search-letter').on('click', function (e) {
                e.preventDefault();
                let $this = $(this);

                $('.ul-letters').find('li').removeClass('active');
                $this.parent().addClass('active');

                letterSearch($this.text());
            });

            $('input[name="search_bar"]').on('keyup', function (e) {
                let $list = $('.ul-letters');
                $list.find('li').removeClass('active');
                $list.find('li').first().addClass('active');

                if (typeof window.studentCompaniesSearch !== undefined) {
                    clearTimeout(window.studentCompaniesSearch);
                }

                window.studentCompaniesSearch = setTimeout(function () {
                    keyWordsSearch();
                }, 1000);

            });

            $(document).on('click', 'a.page-link', function (e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('here');
                let page = $(this).text();

                $('.page-item').removeClass('active');
                $(this).parent().addClass('active');


                let search = $('input[name="search_bar"]').first().val().trim();
                words = search.length ? search : [];

                if (words) {
                    keyWordsSearch();
                    return;
                }

                let letter = $('.ul-letters').find('li.active > .companies-search-letter');

                if (letter.length) {
                    letterSearch(letter.text());
                    return;
                }

                let data = {page: page};
                triggerRequest(data);
            });
        }

        function getPage() {
            let pageItem = $('.page-item.active');
            if (pageItem.length) {
                return pageItem.text();
            }
            return false;
        }

        function letterSearch(letter) {
            let data = {companyLetter: letter};

            let page = getPage();
            if (page) {
                data.page = page;
            }

            triggerRequest(data);
        }

        function keyWordsSearch() {
            let search = $('input[name="search_bar"]').first().val().trim();
            words = search.length ? search : [];

            let data = {companySearch: words};

            let page = getPage();
            if (page) {
                data.page = page;
            }

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