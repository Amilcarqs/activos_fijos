<div class="row">
    <div class="col-md-6 mb-3">
        <label for="codigo" class="form-label font-weight-bold">Código</label>
        <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $activo?->codigo) }}" id="codigo" placeholder="Ingrese el código">
        {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-6 mb-3">
        <label for="descrip" class="form-label font-weight-bold">Descripción</label>
        <input type="text" name="descrip" class="form-control @error('descrip') is-invalid @enderror" value="{{ old('descrip', $activo?->descrip) }}" id="descrip" placeholder="Ingrese la descripción">
        {!! $errors->first('descrip', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-6 mb-3">
        <label for="precio" class="form-label font-weight-bold">Precio</label>
        <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $activo?->precio) }}" id="precio" placeholder="Ingrese el precio">
        {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="col-md-6 mb-3">
        <label for="fadquisicion" class="form-label font-weight-bold">Fecha de adquisición</label>
        <input type="date" name="fadquisicion" class="form-control @error('fadquisicion') is-invalid @enderror" value="{{ old('fadquisicion', $activo?->fadquisicion) }}" id="fadquisicion">
        {!! $errors->first('fadquisicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-12 mb-3">
        <label for="foto" class="form-label font-weight-bold">Foto</label>
        <input type="file" name="foto" accept="image/*" class="form-control @error('foto') is-invalid @enderror" id="foto">
        @if(isset($activo) && $activo->foto)
            <small class="text-muted">Deje vacío este campo si no desea cambiar la imagen.</small>
        @endif
        {!! $errors->first('foto', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-md-6 mb-3">
        <label for="estado_id" class="form-label font-weight-bold">Estado</label>
        <select name="estado_id" id="estado_id" class="form-select @error('estado_id') is-invalid @enderror">
            <option value="">Seleccione un estado</option>
            @foreach ($estados as $estado)
                <option value="{{ $estado->id }}" {{ old('estado_id', $activo?->estado_id) == $estado->id ? 'selected' : '' }}>
                    {{ $estado->descrip }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('estado_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-md-6 mb-3">
        <label for="grupo_id" class="form-label font-weight-bold">Grupo</label>
        <select name="grupo_id" id="grupo_id" class="form-select @error('grupo_id') is-invalid @enderror">
            <option value="">Seleccione un grupo</option>
            @foreach ($grupos as $grupo)
                <option value="{{ $grupo->id }}" {{ old('grupo_id', $activo?->grupo_id) == $grupo->id ? 'selected' : '' }}>
                    {{ $grupo->descrip }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('grupo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-md-6 mb-3">
        <label for="oficina_id" class="form-label font-weight-bold">Oficina</label>
        <select id="oficina_id" name="oficina_id" class="form-select @error('oficina_id') is-invalid @enderror">
            <option value="">Seleccione una oficina</option>
            @foreach($oficinas as $oficina)
                <option value="{{ $oficina->id }}" {{ old('oficina_id', $activo?->oficina_id) == $oficina->id ? 'selected' : '' }}>
                    {{ $oficina->nombre }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('oficina_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-md-6 mb-3">
        <label for="responsable_id" class="form-label font-weight-bold">Responsable</label>
        <select name="responsable_id" id="responsable_id" class="form-select @error('responsable_id') is-invalid @enderror">
            <option value="">Seleccione un responsable</option>
            @foreach ($responsables as $responsable)
                <option value="{{ $responsable->id }}" {{ old('responsable_id', $activo?->responsable_id) == $responsable->id ? 'selected' : '' }}>
                    {{ $responsable->nombre }}
                </option>
            @endforeach
        </select>
        {!! $errors->first('responsable_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 text-right">
        <button type="submit" class="btn btn-success px-4">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>