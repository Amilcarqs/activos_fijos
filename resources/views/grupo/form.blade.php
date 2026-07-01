<div class="row">
    <div class="col-md-6 mb-3">
        <label for="descrip" class="form-label font-weight-bold">Descripción</label>
        <input type="text" name="descrip" class="form-control @error('descrip') is-invalid @enderror" value="{{ old('descrip', $grupo?->descrip) }}" id="descrip" placeholder="Ingrese la descripción">
        {!! $errors->first('descrip', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-6 mb-3">
        <label for="vidautil" class="form-label font-weight-bold">Vida útil</label>
        <input type="text" name="vidautil" class="form-control @error('vidautil') is-invalid @enderror" value="{{ old('vidautil', $grupo?->vidautil) }}" id="vidautil" placeholder="Ingrese la vida útil">
        {!! $errors->first('vidautil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-success px-4">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>