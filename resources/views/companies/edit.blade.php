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
                    <form action="{{route('resume.update')}}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            {{--Contact information--}}
                            <div class="panel-body">
                                <div class="panel-heading">Date de contact</div>
                                <hr>
                                <div class="form-group col-md-6">
                                    <label>Nume Companie</label>
                                    <input type="text" class="form-control" name="company_name"
                                           value=""
                                    />
                                    {{--@if ($errors->has('value.basic.first_name'))--}}
                                        {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('value.basic.first_name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Adresa</label>
                                    <input type="text" class="form-control" name="location"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Telefon</label>
                                    <input type="text" class="form-control" name="phone"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Website</label>
                                    <input type="text" class="form-control" name="website"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Locatie Google Maps</label>
                                    <input type="text" class="form-control" name="map"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" name="twitter"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin"
                                           value=""
                                    />
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Google+</label>
                                    <input type="text" class="form-control" name="google_plus"
                                           value=""
                                    />
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection