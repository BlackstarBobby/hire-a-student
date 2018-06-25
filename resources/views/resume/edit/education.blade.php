<div class="panel-heading text-center">
    Educatie
</div>
<hr>

@foreach($resume->education as $school)
    <div class="education-container">
        <div class="school">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Numele Institutiei</label>
                    <input type="text" class="form-control" name="value[education][school][institution][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Profil / Specializare</label>
                    <input type="text" class="form-control" name="value[education][school][institution][]"
                           value=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Tipul Institutiei</label>
                    <input type="text" class="form-control" name="value[education][school][type][]"
                           placeholder="Facultate \ Masterat \ Doctorat"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Oras</label>
                    <input type="text" class="form-control" name="value[education][school][city][]"
                           value=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Data Admiterii</label>
                    <input type="date" class="form-control" name="value[education][school][start][]"
                           value="{{$resume->basic->birth_date ?? null}}"
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Data Absolvirii</label>
                    <input type="date" class="form-control" name="value[education][school][end][]"
                           value="{{$resume->basic->birth_date ?? null}}"
                    />
                </div>
            </div>
        </div>
    </div>

@endforeach

<div class="row">
    <div class="col-md-12">
        <a class="btn btn-default pull-right add-school">Adauga</a>
    </div>
</div>


<div class="school-template">
    <div class="row">
        <div class="form-group col-md-6">
            <label>Numele Institutiei</label>
            <input type="text" class="form-control" name="value[education][school][institution][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Profil / Specializare</label>
            <input type="text" class="form-control" name="value[education][school][institution][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Tipul Institutiei</label>
            <input type="text" class="form-control" name="value[education][school][type][]"
                   placeholder="Facultate \ Masterat \ Doctorat"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Oras</label>
            <input type="text" class="form-control" name="value[education][school][city][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Data Admiterii</label>
            <input type="date" class="form-control" name="value[education][school][start][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Data Absolvirii</label>
            <input type="date" class="form-control" name="value[education][school][end][]"
                   value=""
            />
        </div>
    </div>

</div>