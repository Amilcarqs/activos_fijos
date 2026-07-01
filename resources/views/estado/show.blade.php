@extends('adminlte::page')

@section('title', 'Detalle del estado')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-toggle-on text-warning mr-2"></i> Detalle del estado</h1>
        <p class="text-muted mb-0">Información del estado seleccionado</p>
    </div>
    <a class="btn btn-warning" href="{{ route('estados.index') }}">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="card card-outline card-warning shadow-sm">
    <div class="card-header bg-warning">
        <h3 class="card-title mb-0"><i class="fas fa-info-circle"></i> Información del estado</h3>
    </div>
    <div class="card-body">
        <div class="form-group mb-0">
            <strong>Descripción:</strong><br>
            <span class="text-muted">{{ $estado->descrip }}</span>
        </div>
    </div>
</div>
@stop
