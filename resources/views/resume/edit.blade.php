@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Completeaza-ti CV-ul</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="{{route('resume.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            {{--Contact information--}}
                            <div class="panel-body">
                                <div class="panel-heading text-center">Date de contact</div>
                                <hr>

                                @include('resume.edit.basic')

                                <div class="panel-heading text-center">
                                    Descrierea
                                </div>
                                <hr>
                                <div class="form-group">
                                    <textarea name="value[description]" id="describe" class="form-control"
                                              placeholder="Despre mine">{!! $resume->description !!}</textarea>
                                </div>

                                @include('resume.edit.education')
                                @include('resume.edit.experience')

                                <div class="panel-heading text-center">
                                    Abilitati
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="text" name="value[abilities]" value="{{$resume->abilities ?? null}}">
                                </div>

                                <div class="panel-heading text-center">
                                    Preferinte
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="">Tipul de job cautat</label>
                                    {!! Form::select('value[job_type]', $jobTypes, $resume->job_type ?? null, ['class' => 'form-control select2', 'placeholder'=>'Selecteaza tipul de job']) !!}
                                </div>

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
        $(function () {
            $('.datepicker').datepicker({
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'yy',
                onClose: function (dateText, inst) {
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, 1));
                }
            });
            $(".date-picker-year").focus(function () {
                $(".ui-datepicker-month").hide();
            });
        });

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

        $('.delete-school').on('click', function () {
            $('.education-container').children().last().remove();
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

        $('.delete-experience').on('click', function () {
            $('.experience-container').children().last().remove();
        });

        $('.select2').select2({
            theme: 'bootstrap'
        });

    </script>
@endsection
