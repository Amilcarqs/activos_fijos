<div class="row">
    <div class="col-md-4 mb-3">
        <label for="codigo" class="form-label font-weight-bold">Código</label>
        <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $oficina?->codigo) }}" id="codigo" placeholder="Ingrese el código">
        {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-4 mb-3">
        <label for="nombre" class="form-label font-weight-bold">Nombre</label>
        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $oficina?->nombre) }}" id="nombre" placeholder="Ingrese el nombre">
        {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-4 mb-3">
        <label for="piso" class="form-label font-weight-bold">Piso</label>
        <input type="text" name="piso" class="form-control @error('piso') is-invalid @enderror" value="{{ old('piso', $oficina?->piso) }}" id="piso" placeholder="Ingrese el piso">
        {!! $errors->first('piso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-success px-4">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>