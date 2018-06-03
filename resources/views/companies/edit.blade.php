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
                    <form action="{{route('companies.update', ['company' => $company->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            {{--Contact information--}}
                            <div class="panel-body">
                                <div class="panel-heading">Date de contact</div>
                                <hr>

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

                            </div>
                            <div class="col-md-4 p-l">
                                <button type="submit" class="btn btn-default btn-block saveCv">Salveaza
                                    modificarile
                                </button>
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>

@endsection