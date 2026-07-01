@extends('adminlte::page')

@section('title', 'Editar activo')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-edit text-success mr-2"></i> Editar activo</h1>
        <p class="text-muted mb-0">Actualice los datos del activo</p>
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
                <h3 class="card-title mb-0"><i class="fas fa-edit"></i> Editar activo</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('activos.update', $activo->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('activo.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
