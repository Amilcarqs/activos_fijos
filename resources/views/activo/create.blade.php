@extends('adminlte::page')

@section('title', 'Crear activo')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-laptop text-green mr-2"></i> Crear activo</h1>
        <p class="text-muted mb-0">Complete la información del activo</p>
    </div>
    <a href="{{ route('activos.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card card-outline card-success shadow-sm">
            <div class="card-header bg-dark">
                <h3 class="card-title mb-0"><i class="fas fa-plus-circle"></i> Nuevo activo</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('activos.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    @include('activo.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
