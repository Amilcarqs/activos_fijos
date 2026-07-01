@extends('adminlte::page')

@section('title', 'Detalle de la oficina')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-building text-secondary mr-2"></i> Detalle de la oficina</h1>
        <p class="text-muted mb-0">Información de la oficina seleccionada</p>
    </div>
    <a class="btn btn-secondary" href="{{ route('oficinas.index') }}">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="card card-outline card-secondary shadow-sm">
    <div class="card-header bg-secondary">
        <h3 class="card-title mb-0"><i class="fas fa-info-circle"></i> Información de la oficina</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mb-3">
                <strong>Código:</strong><br>
                <span class="text-muted">{{ $oficina->codigo }}</span>
            </div>
            <div class="col-md-4 mb-3">
                <strong>Nombre:</strong><br>
                <span class="text-muted">{{ $oficina->nombre }}</span>
            </div>
            <div class="col-md-4 mb-3">
                <strong>Piso:</strong><br>
                <span class="text-muted">{{ $oficina->piso }}</span>
            </div>
        </div>
    </div>
</div>
@stop
