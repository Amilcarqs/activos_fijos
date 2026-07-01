@extends('adminlte::page')

@section('title', 'Crear oficina')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-building text-gray mr-2"></i> Crear oficina</h1>
        <p class="text-muted mb-0">Complete la información de la oficina</p>
    </div>
    <a href="{{ route('oficinas.index') }}" class="btn btn-outline-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card card-outline card-success shadow-sm">
            <div class="card-header bg-dark">
                <h3 class="card-title mb-0"><i class="fas fa-plus-circle"></i> Nueva oficina</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('oficinas.store') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    @include('oficina.form')
                </form>
            </div>
        </div>
    </div>
</div>
@stop
