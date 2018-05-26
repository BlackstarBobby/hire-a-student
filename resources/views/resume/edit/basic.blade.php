<div class="form-group col-md-6">
    <label>Prenume</label>
    <input type="text" class="form-control" name="value[basic][first_name]"
           value="{{$resume->basic->first_name ?? null}}"
    />
    @if ($errors->has('value.basic.first_name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.first_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-md-6">
    <label>Nume</label>
    <input type="text" class="form-control" name="value[basic][last_name]"
           value="{{$resume->basic->last_name ?? null}}"
    />
    @if ($errors->has('value.basic.last_name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.last_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-md-6">
    <label>Titlu</label>
    <input type="text" class="form-control" name="value[basic][title]"
           value="{{$resume->basic->title ?? null}}"
    />
    @if ($errors->has('value.basic.title'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.title') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-md-6">
    <label>Telefon</label>
    <input type="text" class="form-control" name="value[basic][phone]"
           value="{{$resume->basic->phone ?? null}}"
    />
    @if ($errors->has('value.basic.phone'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.phone') }}</strong>
        </span>
    @endif
</div>

<div class="form-group col-md-6">
    <label>Data Nastere</label>
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
    <label>Adresa</label>
    <input type="text" class="form-control" name="value[basic][address]"
           value="{{$resume->basic->address ?? null}}"
    />
    @if ($errors->has('value.basic.address'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('value.basic.address') }}</strong>
        </span>
    @endif
</div>