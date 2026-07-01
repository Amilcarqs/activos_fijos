@extends('layouts.app')


@section('title', 'Activos')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-laptop text-success mr-2"></i> Gestión de Activos</h1>
        <p class="text-muted mb-0">Listado completo de los activos registrados</p>
    </div>
    <div class="d-flex flex-wrap gap-2">
        <a href="{{ route('activos.pdf') }}" class="btn btn-outline-danger">
            <i class="fas fa-file-pdf"></i> PDF
        </a>
        <a href="{{ route('activos.qr') }}" class="btn btn-outline-success">
            <i class="fas fa-qrcode"></i> QR
        </a>
        <a href="{{ route('activos.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Nuevo activo
        </a>
    </div>
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

<div class="card card-outline card-success shadow-sm">
    <div class="card-header bg-success">
        <h3 class="card-title mb-0"><i class="fas fa-list"></i> Lista de activos</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 text-nowrap">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Fecha de adquisición</th>
                        <th>Foto</th>
                        <th>Estado</th>
                        <th>Grupo</th>
                        <th>Oficina</th>
                        <th>Responsable</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activos as $activo)
                    <tr class="align-middle">
                        <td>{{ ++$i }}</td>
                        <td>{{ $activo->codigo }}</td>
                        <td>{{ $activo->descrip }}</td>
                        <td>{{ $activo->precio }}</td>
                        <td>{{ $activo->fadquisicion }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$activo->foto) }}" class="img-thumbnail" width="110" style="object-fit:cover; height:70px;" alt="Foto del activo">
                        </td>
                        <td>{{ $activo->estado->descrip }}</td>
                        <td>{{ $activo->grupo->descrip }}</td>
                        <td>{{ $activo->oficina->nombre }}</td>
                        <td>{{ $activo->responsable->nombre }}</td>
                        <td class="text-center">
                            <form action="{{ route('activos.destroy', $activo->id) }}" method="POST" class="d-flex justify-content-center gap-1 flex-wrap">
                                <a class="btn btn-sm btn-info" href="{{ route('activos.show', $activo->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning" href="{{ route('activos.edit', $activo->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                        Swal.fire({
                                            title: '¿Desea eliminar este activo?',
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
                                <!-- <button type="submit" class="btn btn-sm btn-danger" onclick="event.preventDefault(); confirm('¿Desea eliminar este activo?') ? this.closest('form').submit() : false;"><i class="fas fa-trash"></i></button> -->
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
    {!! $activos->withQueryString()->links() !!}
</div>
@stop