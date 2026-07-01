@extends('layouts.app')

@section('title', 'Oficinas')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-building text-secondary mr-2"></i> Gestión de Oficinas</h1>
        <p class="text-muted mb-0">Consulta y administra las oficinas registradas</p>
    </div>
    <a href="{{ route('oficinas.create') }}" class="btn btn-secondary">
        <i class="fas fa-plus-circle"></i> Nueva oficina
    </a>
</div>
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

<div class="card card-outline card-secondary shadow-sm">
    <div class="card-header bg-secondary">
        <h3 class="card-title mb-0"><i class="fas fa-list"></i> Lista de oficinas</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Piso</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($oficinas as $oficina)
                        <tr class="align-middle">
                            <td>{{ ++$i }}</td>
                            <td>{{ $oficina->codigo }}</td>
                            <td>{{ $oficina->nombre }}</td>
                            <td>{{ $oficina->piso }}</td>
                            <td class="text-center">
                                <form action="{{ route('oficinas.destroy', $oficina->id) }}" method="POST" class="d-flex justify-content-center gap-1 flex-wrap">
                                    <a class="btn btn-sm btn-info" href="{{ route('oficinas.show', $oficina->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-sm btn-warning" href="{{ route('oficinas.edit', $oficina->id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                        Swal.fire({
                                            title: '¿Desea eliminar esta oficina?',
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
                                    <!-- <button type="submit" class="btn btn-sm btn-danger" onclick="event.preventDefault(); confirm('¿Desea eliminar esta oficina?') ? this.closest('form').submit() : false;"><i class="fas fa-trash"></i></button> -->
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
    {!! $oficinas->withQueryString()->links() !!}
</div>
@stop
