@extends('layouts.app')

@section('content')
    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Editeaza datele companiei</h2>
                            <p class="pull-right">Ultima actualizare: {{isset($company->updated_at) ? \Carbon\Carbon::parse($company->updated_at)->format('d-m-Y') : null}}</p>
                            <p>*Campurile se pot lasa goale, dar daca Numele Companiei, Adresa si
                                Descrierea nu sunt completate compania nu va aparea in rezultate
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="{{route('companies.update', ['company' => $company->id])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            {{--Contact information--}}
                            <div class="panel-body">
                                {{--<div class="panel-heading text-center">Date de contact</div>--}}
                                {{--<hr>--}}

                                <div class="row">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="logo"/>
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                 style="background-image: url({{url($company->logo)}});">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nume Companie</label>
                                        <input type="text" class="form-control" name="company_name"
                                               value="{{$company->company_name ?? null}}"
                                        />
                                        @if ($errors->has('company_name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Adresa</label>
                                        <input type="text" class="form-control" name="location"
                                               value="{{$company->location ?? null}}"
                                        />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                            <label for="">Descriere</label>
                                            <textarea name="description" id="describe" class="form-control"
                                                      placeholder="Despre mine">
                                                {!! $company->description ?? null !!}
                                            </textarea>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Telefon</label>
                                        <input type="text" class="form-control" name="phone"
                                               value="{{$company->phone ?? null}}"
                                        />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                               value="{{$company->email ?? null}}"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Website</label>
                                        <input type="text" class="form-control" name="website"
                                               value="{{$company->website ?? null}}"
                                        />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Locatie Google Maps</label>
                                        <span  data-toggle="popover" data-trigger="hover" data-placement="top"  data-html="true" data-content="Se cauta locatia dorita pe Google Maps si se urmeaza pasii: <br><br> Share -> Embed a map -> Small -> Copy HTML"><i class="fa fa-info-circle"></i>
                                        </span>
                                        <input type="text" class="form-control" name="map"
                                               value="{{$company->map ?? null}}"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="facebook"
                                               value="{{$company->facebook ?? null}}"
                                        />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" name="twitter"
                                               value="{{$company->twitter ?? null}}"
                                        />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin"
                                               value="{{$company->linkedin ?? null}}"
                                        />
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Google+</label>
                                        <input type="text" class="form-control" name="google_plus"
                                               value="{{$company->google_plus ?? null}}"
                                        />
                                    </div>
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
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload").change(function () {
            readURL(this);
        });

        $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
        });
    </script>

@endsection