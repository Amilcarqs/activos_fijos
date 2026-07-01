@extends('adminlte::page')

@section('title', 'Editar responsable')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-edit text-success mr-2"></i> Editar responsable</h1>
        <p class="text-muted mb-0">Actualice los datos del responsable</p>
    </div>
    <a href="{{ route('responsables.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card card-outline card-success shadow-sm">
            <div class="card-header bg-dark">
                <h3 class="card-title mb-0"><i class="fas fa-edit"></i> Editar responsable</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('responsables.update', $responsable->id) }}" role="form" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
                    @csrf
                    @include('responsable.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
