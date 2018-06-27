<div class="panel-heading text-center">
    Experienta
</div>
<hr>
<div class="experience-container">
    @if(isset($resume->experience))
        <?php $index = 0; ?>
        @foreach($resume->experience as $exp)

            <div class="job">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Numele Companiei</label>
                        <input type="text" class="form-control" name="value[experience][job][institution][]"
                               value="{{$exp->institution[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-6">
                        <label>Functia ocupata</label>
                        <input type="text" class="form-control" name="value[experience][job][position][]"
                               value="{{$exp->position[$index] ?? null}}"
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Oras</label>
                        <input type="text" class="form-control" name="value[experience][job][location][]"
                               placeholder=""
                               value="{{$exp->location[$index] ?? null}}"
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
                        <textarea name="value[experience][job][description][]" id="" cols="30" rows="5"
                                  placeholder="Descrierea job-ului">{!! trim($exp->description[$index] ?? null) !!}</textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-5">
                        <label>De la</label>
                        <input type="date" class="form-control" name="value[experience][job][start][]"
                               value="{{$exp->start[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-5">
                        <label>Pana la</label>
                        <input type="date" class="form-control" name="value[experience][job][end][]"
                               value="{{$exp->end[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-2">
                        <label style="display: block">Prezent</label>
                        <input type="checkbox" value="present" name="value[experience][job][present][]"
                               checked="@if(isset(($exp->institution[$index]))) true @else false @endif">
                    </div>
                </div>
            </div><?php $index = $index + 1; ?>
        @endforeach
    @endif
</div>


<div class="row">
    <div class="col-md-12">
        <a class="btn btn-warning pull-right delete-experience">Sterge</a>
        <a class="btn btn-success pull-right add-experience">Adauga</a>
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
            <textarea name="value[experience][job_replace][description][]" id="" cols="30" rows="5"
                      placeholder="Descrierea job-ului"></textarea>
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