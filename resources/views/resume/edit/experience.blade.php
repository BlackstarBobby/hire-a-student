<div class="panel-heading text-center">
    Experenta
</div>
<hr>

@foreach($resume->experience as $exp)
    <div class="education-container">
        <div class="school">
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Numele Institutiei</label>
                    <input type="text" class="form-control" name="value[experience][job][institution][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Profil / Specializare</label>
                    <input type="text" class="form-control" name="value[experience][job][specialization][]"
                           value=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Tipul Institutiei</label>
                    <input type="text" class="form-control" name="value[experience][job][type][]"
                           placeholder="Facultate \ Masterat \ Doctorat"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Oras</label>
                    <input type="text" class="form-control" name="value[experience][job][city][]"
                           value=""
                    />
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Data Admiterii</label>
                    <input type="date" class="form-control" name="value[experience][job][start][]"
                           value=""
                    />
                </div>

                <div class="form-group col-md-6">
                    <label>Data Absolvirii</label>
                    <input type="date" class="form-control" name="value[experience][job][end][]"
                           value=""
                    />
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


<div class="school-template">
    <div class="row">
        <div class="form-group col-md-6">
            <label>Numele Institutiei</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][institution][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Profil / Specializare</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][specialization][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Tipul Institutiei</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][type][]"
                   placeholder="Facultate \ Masterat \ Doctorat"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Oras</label>
            <input type="text" class="form-control" name="value[experience][job_replace]][city][]"
                   value=""
            />
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label>Data Admiterii</label>
            <input type="date" class="form-control" name="value[experience][job_replace]][start][]"
                   value=""
            />
        </div>

        <div class="form-group col-md-6">
            <label>Data Absolvirii</label>
            <input type="date" class="form-control" name="value[experience][job_replace]][end][]"
                   value=""
            />
        </div>
    </div>

</div>