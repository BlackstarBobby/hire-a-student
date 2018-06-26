@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Completeaza-ti CV-ul</h2>
                            {{--<p class="pull-right">Ultima actualizare: </p>--}}
                            <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
                                lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi
                                consectetuer lacinia.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="{{route('resume.update', ['resume' => $res->id])}}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            {{--Contact information--}}
                            <div class="panel-body">
                                <div class="panel-heading text-center">Date de contact</div>
                                <hr>

                                @include('resume.edit.basic')



                                {{--<div class="borderfull-width"></div>--}}
                                {{--<div class="panel-heading">Basic Information</div>--}}
                                {{--<hr>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Job Title</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Position</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Years of Experience</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Position</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>--- Choose a Category ---</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Expected Job Category</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>--- Choose a Category ---</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Expected Salary Package</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-12 p-l p-r">--}}
                                {{--<label>Description About Yourself</label>--}}

                                <div class="panel-heading text-center">
                                    Descrierea
                                </div>
                                <hr>
                                <div class="form-group">
                                    <textarea name="value[description]" id="describe" class="form-control"
                                              placeholder="Despre mine"></textarea>
                                </div>

                                @include('resume.edit.education')
                                @include('resume.edit.experience')


                                <div class="col-md-4 p-l">
                                    <button type="submit" class="btn btn-default btn-block saveCv">Salveaza
                                        modificarile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('extraScripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#describe'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            })
        ;

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    let $imgPrev = $('#imagePreview');

                    $imgPrev.css('background-image', 'url(' + e.target.result + ')');
                    $imgPrev.hide();
                    $imgPrev.fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function () {
            readURL(this);
        });


        $('.add-school').on('click', function () {
            let $template = $('.school-template');

            if ($template.length) {
                let $copyTemplate = $template.clone();

                $copyTemplate.removeClass('school-template');

                let $inputReplace = $copyTemplate.find("input[name*='school_replace']");
                $inputReplace.each(function () {
                    $(this).attr('name', $(this).attr('name').replace('school_replace', 'school'))
                });

                $('.education-container').append($copyTemplate);
            }
        });

        $('.add-experience').on('click', function () {
            let $template = $('.job-template');

            if ($template.length) {
                let $copyTemplate = $template.clone();

                $copyTemplate.removeClass('job-template');

                let $inputReplace = $copyTemplate.find("input[name*='job_replace']");
                $inputReplace.each(function () {
                    $(this).attr('name', $(this).attr('name').replace('job_replace', 'school'))
                });

                $('.experience-container').append($copyTemplate);
            }
        });

    </script>
@endsection
