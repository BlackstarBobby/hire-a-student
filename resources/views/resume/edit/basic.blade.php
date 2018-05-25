<div class="form-group col-md-6">
    <label>Prenume</label>
    <input type="text" class="form-control" name=""/>
    @if ($errors->has($errorName))
        <span class="invalid-feedback">
            <strong>{{ $errors->first($errorName ?? null) }}</strong>
        </span>
    @endif
</div>