@extends('adminlte::page')

@section('title', 'Detalle del activo')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-box text-success mr-2"></i> Detalle del activo</h1>
        <p class="text-muted mb-0">Información completa del registro seleccionado</p>
    </div>
    <a class="btn btn-success" href="{{ route('activos.index') }}">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card card-outline card-success shadow-sm">
            <div class="card-header bg-success">
                <h3 class="card-title mb-0"><i class="fas fa-info-circle"></i> Información general</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Código:</strong><br>
                        <span class="text-muted">{{ $activo->codigo }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Descripción:</strong><br>
                        <span class="text-muted">{{ $activo->descrip }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Precio:</strong><br>
                        <span class="text-muted">{{ $activo->precio }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Fecha de adquisición:</strong><br>
                        <span class="text-muted">{{ $activo->fadquisicion }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Estado:</strong><br>
                        <span class="text-muted">{{ $activo->estado->descrip }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Grupo:</strong><br>
                        <span class="text-muted">{{ $activo->grupo->descrip }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Oficina:</strong><br>
                        <span class="text-muted">{{ $activo->oficina->nombre }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Responsable:</strong><br>
                        <span class="text-muted">{{ $activo->responsable->nombre }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card card-outline card-success shadow-sm">
            <div class="card-header bg-success">
                <h3 class="card-title mb-0"><i class="fas fa-image"></i> Foto</h3>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('storage/'.$activo->foto) }}" class="img-fluid rounded shadow-sm" style="max-height: 260px; object-fit: cover;" alt="Foto del activo">
            </div>
        </div>
    </div>
</div>
@stop
