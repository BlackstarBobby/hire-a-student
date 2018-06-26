<div class="panel-heading text-center">
    Experienta
</div>
<hr>

@foreach($resume->experience as $exp)
    <div class="experience-container">
        <div class="job">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Numele Companiei</label>
                    <input type="text" class="form-control" name="value[experience][job][institution][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Functia ocupata</label>
                    <input type="text" class="form-control" name="value[experience][job][position][]"
                           value=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Oras</label>
                    <input type="text" class="form-control" name="value[experience][job][location][]"
                           placeholder=""
                           value=""
                    />
                </div>

                {{--<div class="form-group col-md-6">--}}
                    {{--<label>Oras</label>--}}
                    {{--<input type="text" class="form-control" name="value[experience][job][city][]"--}}
                           {{--value=""--}}
                    {{--/>--}}
                {{--</div>--}}
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <textarea name="value[experience][job][description][]" id="" cols="30" rows="5" placeholder="Descrierea job-ului"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5">
                    <label>De la</label>
                    <input type="date" class="form-control" name="value[experience][job][start][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-5">
                    <label>Pana la</label>
                    <input type="date" class="form-control" name="value[experience][job][end][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-2">
                    <label style="display: block">Prezent</label>
                    <input type="checkbox" value="present">
                </div>
            </div>
        </div>
    </div>

@endforeach

<div class="row">
    <div class="col-md-12">
        <a class="btn btn-default pull-right add-experience">Adauga</a>
    </div>
</div>


<div class="job-template">
    <div class="row">
        <div class="form-group col-md-6">
            <label>Numele Companiei</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][institution][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Functia ocupata</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][position][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Oras</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][location][]"
                   placeholder=""
                   value=""
            />
        </div>

        {{--<div class="form-group col-md-6">--}}
            {{--<label>Oras</label>--}}
            {{--<input type="text" class="form-control" name="value[experience][job_replace]][city][]"--}}
                   {{--value=""--}}
            {{--/>--}}
        {{--</div>--}}
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <textarea name="value[experience][job_replace][description][]" id="" cols="30" rows="5" placeholder="Descrierea job-ului"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-5">
            <label>De la</label>
            <input type="date" class="form-control" name="value[experience][job_replace]][start][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-5">
            <label>Pana la</label>
            <input type="date" class="form-control" name="value[experience][job_replace]][end][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-2">
            <label style="display: block">Prezent</label>
            <input type="checkbox" value="present">
        </div>
    </div>

</div>