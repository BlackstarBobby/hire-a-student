<div class="form-group col-md-6">
    <label>{{$labelName ?? null}}</label>
    <input type="text" class="form-control" name="{{$inputName ?? null}}"/>
    @if ($errors->has($errorName ?? null))
        <span class="invalid-feedback">
            <strong>{{ $errors->first($errorName ?? null) }}</strong>
        </span>
    @endif
</div>