@extends('layouts.app')

@section('title', 'Responsables')

@section('content_header')
<div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
    <div>
        <h1 class="mb-0"><i class="fas fa-user-tie text-primary mr-2"></i> Gestión de Responsables</h1>
        <p class="text-muted mb-0">Administra las personas responsables de los activos</p>
    </div>
    <a href="{{ route('responsables.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i> Nuevo responsable
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

<div class="card card-outline card-primary shadow-sm">
    <div class="card-header bg-primary">
        <h3 class="card-title mb-0"><i class="fas fa-users"></i> Lista de responsables</h3>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 text-nowrap">
                <thead class="bg-light">
                    <tr>
                        <th>#</th>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th class="text-center">Fotografía</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($responsables as $responsable)
                    <tr class="align-middle">
                        <td>{{ ++$i }}</td>
                        <td>{{ $responsable->ci }}</td>
                        <td>{{ $responsable->nombre }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/'.$responsable->foto) }}" width="110" style="object-fit:cover; height:110px;" alt="Foto del responsable">
                        </td>
                        <td class="text-center">
                            <form action="{{ route('responsables.destroy',$responsable->id) }}" method="POST" class="d-flex justify-content-center gap-1 flex-wrap">
                                <a class="btn btn-sm btn-info" href="{{ route('responsables.show',$responsable->id) }}"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-sm btn-warning" href="{{ route('responsables.edit',$responsable->id) }}"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="event.preventDefault();
                                        Swal.fire({
                                            title: '¿Desea eliminar?',
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
                                <!-- <button type="submit" class="btn btn-sm btn-danger" onclick="event.preventDefault(); confirm('¿Desea eliminar?') ? this.closest('form').submit() : false;"><i class="fas fa-trash"></i></button> -->
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
    {!! $responsables->withQueryString()->links() !!}
</div>
@stop