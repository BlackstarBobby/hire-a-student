<div class="panel-heading text-center">
    Educatie
</div>
<hr>

@foreach($resume->education as $school)

    <div class="school">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Numele Institutiei</label>
                <input type="text" class="form-control" name="value[education][school][institution]"
                       value="{{$resume->basic->first_name ?? null}}"
                />
                @if ($errors->has('value.basic.first_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('value.basic.first_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-6">
                <label>Profil / Specializare</label>
                <input type="text" class="form-control" name="value[education][school][institution]"
                       value="{{$resume->basic->first_name ?? null}}"
                />
                @if ($errors->has('value.basic.first_name'))
                    <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.first_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label>Tipul Institutiei</label>
                <input type="text" class="form-control" name="value[education][school][institution]"
                       placeholder="Facultate \ Masterat \ Doctorat"
                       value="{{$resume->basic->first_name ?? null}}"
                />
                @if ($errors->has('value.basic.first_name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('value.basic.first_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-6">
                <label>Oras</label>
                <input type="text" class="form-control" name="value[education][school][institution]"
                       value="{{$resume->basic->first_name ?? null}}"
                />
                @if ($errors->has('value.basic.first_name'))
                    <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.first_name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label>Data Admiterii</label>
                <input type="date" class="form-control" name="value[basic][birth_date]"
                       value="{{$resume->basic->birth_date ?? null}}"
                />
                @if ($errors->has('value.basic.birth_date'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('value.basic.birth_date') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-md-6">
                <label>Data Absolvirii</label>
                <input type="date" class="form-control" name="value[basic][birth_date]"
                       value="{{$resume->basic->birth_date ?? null}}"
                />
                @if ($errors->has('value.basic.birth_date'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('value.basic.birth_date') }}</strong>
                    </span>
                @endif
            </div>
        </div>

    </div>

@endforeach
