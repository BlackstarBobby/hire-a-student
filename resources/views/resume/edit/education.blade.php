<div class="panel-heading text-center">
    Educatie
</div>
<hr>
<div class="education-container">
    @if(isset($resume->education ))
        <?php $index = 0; ?>
        @foreach($resume->education as $key => $school)
            <div class="school">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Numele Institutiei</label>
                        <input type="text" class="form-control" name="value[education][school][institution][]"
                               value="{{$school->institution[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-6">
                        <label>Profil / Specializare</label>
                        <input type="text" class="form-control" name="value[education][school][specialization][]"
                               value="{{$school->specialization[$index]  ?? null}}"
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Tipul Institutiei</label>
                        <input type="text" class="form-control" name="value[education][school][type][]"
                               placeholder="Facultate \ Masterat \ Doctorat"
                               value="{{$school->type[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-6">
                        <label>Oras</label>
                        <input type="text" class="form-control" name="value[education][school][city][]"
                               value="{{$school->city[$index] ?? null}}"
                        />
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Data Admiterii</label>
                        <input type="text" class="form-control datepicker" name="value[education][school][start][]"
                               value="{{$school->start[$index] ?? null}}"
                        />
                    </div>

                    <div class="form-group col-md-6">
                        <label>Data Absolvirii</label>
                        <input type="text" class="form-control datepicker" name="value[education][school][end][]"
                               value="{{$school->end[$index] ?? null}}"
                        />
                    </div>
                </div>
            </div>
            <?php $index = $index + 1; ?>
        @endforeach
    @endif
</div>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-warning pull-right delete-school">Sterge</a>
        <a class="btn btn-success pull-right add-school">Adauga</a>
    </div>
</div>


<div class="school-template">
    <div class="row">
        <div class="form-group col-md-6">
            <label>Numele Institutiei</label>
            <input type="text" class="form-control" name="value[education][school_replace][institution][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Profil / Specializare</label>
            <input type="text" class="form-control" name="value[education][school_replace][specialization][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Tipul Institutiei</label>
            <input type="text" class="form-control" name="value[education][school_replace][type][]"
                   placeholder="Facultate \ Masterat \ Doctorat"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Oras</label>
            <input type="text" class="form-control" name="value[education][school_replace][city][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Data Admiterii</label>
            <input type="date" class="form-control" name="value[education][school_replace][start][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Data Absolvirii</label>
            <input type="date" class="form-control" name="value[education][school_replace][end][]"
                   value=""
            />
        </div>
    </div>

</div>