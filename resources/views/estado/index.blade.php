@extends('layouts.app')


@section('title', 'Estados')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-check-circle text-warning mr-2"></i> Gestión de Estados</h1>
        <p class="text-muted mb-0">Administra los estados disponibles para los activos</p>
    </div>
    <a href="{{ route('estados.create') }}" class="btn btn-warning">
        <i class="fas fa-plus-circle"></i> Nuevo estado
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

<div class="card card-outline card-warning shadow-sm">
    <div class="card-header bg-warning">
        <h3 class="card-title mb-0"><i class="fas fa-list"></i> Lista de estados</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Descripción</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                        <tr class="align-middle">
                            <td>{{ ++$i }}</td>
                            <td>{{ $estado->descrip }}</td>
                            <td class="text-center">
                                <form action="{{ route('estados.destroy', $estado->id) }}" method="POST" class="d-flex justify-content-center gap-1 flex-wrap">
                                    <a class="btn btn-sm btn-info" href="{{ route('estados.show', $estado->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-sm btn-warning" href="{{ route('estados.edit', $estado->id) }}"><i class="fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn btn-sm btn-danger"
                                        onclick="event.preventDefault();
                                            Swal.fire({
                                                title: '¿Desea eliminar este estado?',
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
                                    <!-- <button type="submit" class="btn btn-sm btn-danger" onclick="event.preventDefault(); confirm('¿Desea eliminar este estado?') ? this.closest('form').submit() : false;"><i class="fas fa-trash"></i></button> -->
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
    {!! $estados->withQueryString()->links() !!}
</div>
@stop
