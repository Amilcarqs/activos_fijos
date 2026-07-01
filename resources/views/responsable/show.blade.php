@extends('adminlte::page')

@section('title', 'Detalle del responsable')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-user-tie text-primary mr-2"></i> Detalle del responsable</h1>
        <p class="text-muted mb-0">Información del responsable seleccionado</p>
    </div>
    <a class="btn btn-primary" href="{{ route('responsables.index') }}">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header bg-primary">
                <h3 class="card-title mb-0"><i class="fas fa-info-circle"></i> Información personal</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>CI:</strong><br>
                        <span class="text-muted">{{ $responsable->ci }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Nombre:</strong><br>
                        <span class="text-muted">{{ $responsable->nombre }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card card-outline card-primary shadow-sm">
            <div class="card-header bg-primary">
                <h3 class="card-title mb-0"><i class="fas fa-image"></i> Fotografía</h3>
            </div>
            <div class="card-body text-center">
                <img src="{{ asset('storage/'.$responsable->foto) }}" class="img-fluid shadow-sm" style="max-height: 220px; object-fit: cover;" alt="Foto del responsable">
            </div>
        </div>
    </div>
</div>
@stop
