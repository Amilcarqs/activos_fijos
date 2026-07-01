@extends('layouts.app')
@section('title', 'Grupos')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-layer-group text-info mr-2"></i> Gestión de Grupos</h1>
        <p class="text-muted mb-0">Clasifica los activos por grupo</p>
    </div>
    <a href="{{ route('grupos.create') }}" class="btn btn-info">
        <i class="fas fa-plus-circle"></i> Nuevo grupo
    </a>
</div>
@stop

@section('css')
<style>
    .pagination .page-link {
        padding: .25rem .5rem;
        font-size: .85rem;
        line-height: 1.1;
    }

    .pagination .page-item .page-link {
        min-width: 1.9rem;
    }
</style>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    <i class="fas fa-check-circle"></i>
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert">
        <span>&times;</span>
    </button>
</div>
@endif

<div class="card card-outline card-info shadow-sm">
    <div class="card-header bg-info">
        <h3 class="card-title mb-0"><i class="fas fa-list"></i> Lista de grupos</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th>Vida útil</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $grupo)
                        <tr class="align-middle">
                            <td>{{ ++$i }}</td>
                            <td>{{ $grupo->descrip }}</td>
                            <td>{{ $grupo->vidautil }}</td>
                            <td class="text-center">
                                <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" class="d-flex justify-content-center gap-1 flex-wrap">
                                    <a class="btn btn-sm btn-info" href="{{ route('grupos.show', $grupo->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-sm btn-warning" href="{{ route('grupos.edit', $grupo->id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="event.preventDefault();
                                            Swal.fire({
                                                title: '¿Desea eliminar este grupo?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonText: 'Sí, eliminar',
                                                cancelButtonText: 'Cancelar'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    this.closest('form').submit();
                                                }
                                            });">
                                        <i class="fas fa-trash"></i>
                                </button>
                                    <!-- <button type="submit" class="btn btn-sm btn-danger" onclick="event.preventDefault(); confirm('¿Desea eliminar este grupo?') ? this.closest('form').submit() : false;"><i class="fas fa-trash"></i></button> -->
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3 d-flex justify-content-center">
    {!! $grupos->withQueryString()->links() !!}
</div>
@stop