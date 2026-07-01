<div class="row">
    <div class="col-md-6 mb-3">
        <label for="ci" class="form-label font-weight-bold">CI</label>
        <input type="text" name="ci" class="form-control @error('ci') is-invalid @enderror" value="{{ old('ci', $responsable?->ci) }}" id="ci" placeholder="Ingrese el CI">
        {!! $errors->first('ci', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-6 mb-3">
        <label for="nombre" class="form-label font-weight-bold">Nombre</label>
        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $responsable?->nombre) }}" id="nombre" placeholder="Ingrese el nombre">
        {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-12 mb-3">
        <label for="foto" class="form-label font-weight-bold">Foto</label>
        <input type="file" name="foto" accept="image/*" class="form-control @error('foto') is-invalid @enderror" id="foto">
        @if(isset($responsable) && $responsable->foto)
            <small class="text-muted">Deje vacío este campo si no desea cambiar la imagen.</small>
        @endif
        {!! $errors->first('foto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-success px-4">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>