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

                                {{--<textarea name="describe" id="describe">About me</textarea>--}}

                                {{--</div>--}}
                                {{--<div class="borderfull-width"></div>--}}
                                {{--<div class="panel-heading">Education Details</div>--}}
                                {{--<hr>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Basic / Graduation</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Specialization</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>--- Choose a Category ---</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>University / Institute</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Year</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>--- Choose a Category ---</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Grading System</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>--- Choose a Category ---</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--<option>IT</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-r">--}}
                                {{--<label>Marks</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<button type="button" class="btn btn-click" data-toggle="collapse"--}}
                                {{--data-target="#demo"><i class="fa fa-plus-circle"></i>Add Class XII--}}
                                {{--</button>--}}
                                {{--<div id="demo" class="collapse">--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Basic / Institute</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>University / Institute</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Marks</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Year</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>2017</option>--}}
                                {{--<option>2016</option>--}}
                                {{--<option>2015</option>--}}
                                {{--<option>2014</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<button type="button" class="btn btn-click" data-toggle="collapse"--}}
                                {{--data-target="#demo2"><i class="fa fa-plus-circle"></i>Add More--}}
                                {{--Certificate--}}
                                {{--</button>--}}
                                {{--<div id="demo2" class="collapse">--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>University / Graduation</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Marks</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Year</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>2017</option>--}}
                                {{--<option>2016</option>--}}
                                {{--<option>2015</option>--}}
                                {{--<option>2014</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="borderfull-width"></div>--}}
                                {{--<div class="panel-heading">Employer/Designation</div>--}}
                                {{--<hr>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Employer Name</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Status</label>--}}
                                {{--<select class="form-control">--}}
                                {{--<option>Previous Employer</option>--}}
                                {{--<option>Employer</option>--}}
                                {{--<option>Employer</option>--}}
                                {{--<option>Employer</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-3 p-l">--}}
                                {{--<label>Duration</label>--}}
                                {{--<input type="date" class="form-control" placeholder="15 January 2014"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-3 p-l">--}}
                                {{--<label></label>--}}
                                {{--<input type="date" class="form-control" placeholder="15 January 2014"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-6 p-l">--}}
                                {{--<label>Designation</label>--}}
                                {{--<input type="text" class="form-control"/>--}}
                                {{--</div>--}}
                                {{--<div class="form-group col-md-12 p-l">--}}
                                {{--<label>Job Profile</label>--}}
                                {{--<textarea type="text" class="form-control" placeholder=""></textarea>--}}
                                {{--</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<button type="button" class="btn btn-click" data-toggle="collapse"--}}
                                {{--data-target="#demo3"><i class="fa fa-plus-circle"></i>Add More--}}
                                {{--</button>--}}
                                {{--<div id="demo3" class="collapse"></div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-4 p-l">--}}
                                {{--<a href="#" class="btn btn-default btn-block">Preview Your Resume</a>--}}
                                {{--</div>--}}
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
        // $('.saveCv').on('click', function (e) {
        //     e.preventDefault();
        //
        //     let data = [];
        //
        //     data = $('input');
        //
        //     console.log(data);
        // })
    </script>

    <script>
        // ClassicEditor
        //     .create(document.querySelector('#describe'))
        //     .then(editor => {
        //         console.log(editor);
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
    </script>
@endsection
