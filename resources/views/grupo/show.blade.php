@extends('adminlte::page')

@section('title', 'Detalle del grupo')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-layer-group text-info mr-2"></i> Detalle del grupo</h1>
        <p class="text-muted mb-0">Información del grupo seleccionado</p>
    </div>
    <a class="btn btn-info" href="{{ route('grupos.index') }}">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="card card-outline card-info shadow-sm">
    <div class="card-header bg-info">
        <h3 class="card-title mb-0"><i class="fas fa-info-circle"></i> Información del grupo</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3">
                <strong>Descripción:</strong><br>
                <span class="text-muted">{{ $grupo->descrip }}</span>
            </div>
            <div class="col-md-6 mb-3">
                <strong>Vida útil:</strong><br>
                <span class="text-muted">{{ $grupo->vidautil }}</span>
            </div>
        </div>
    </div>
</div>
@stop
