@extends('layouts.app')

@section('content')

    <main id="maincontent">
        <section class="resume">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <h2>Add A Job</h2>
                            <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan
                                lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum
                                primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi
                                consectetuer lacinia.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <form action="{{route('job.new')}}" method="post">
                                @csrf
                                <div class="panel-heading">Job Details</div>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Job Title</label>
                                        <input type="text" name="title" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Job Type</label>
                                        {!! Form::select('job_type', $jobTypes ?? null, null,['class'=>'form-control select2', 'placeholder'=> 'Alege tipul job-ului']) !!}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Salary</label>
                                        <input type="text" name="salary" class="form-control"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('extraScripts')
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                theme: 'bootstrap'
            });
        });
    </script>
@endsection