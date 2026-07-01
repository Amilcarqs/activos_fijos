@extends('layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fas fa-home text-black mr-2"></i>Panel Principal</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background: linear-gradient(135deg, #2B5748 0%, #618764 100%); color: white; border-radius: 16px;">
                <div class="inner">
                    <h3>{{ $activosCount }}</h3>
                    <p>Activos registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-laptop"></i>
                </div>
                <a href="{{ route('activos.index') }}" class="small-box-footer" style="color: white;">
                    Ver activos <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background: linear-gradient(135deg, #618764 0%, #9CB080 100%); color: white; border-radius: 16px;">
                <div class="inner">
                    <h3>{{ $estadosCount }}</h3>
                    <p>Estados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="{{ route('estados.index') }}" class="small-box-footer" style="color: white;">
                    Ver estados <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background: linear-gradient(135deg, #9CB080 0%, #273338 100%); color: white; border-radius: 16px;">
                <div class="inner">
                    <h3>{{ $gruposCount }}</h3>
                    <p>Grupos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-layer-group"></i>
                </div>
                <a href="{{ route('grupos.index') }}" class="small-box-footer" style="color: white;">
                    Ver grupos <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box" style="background: linear-gradient(135deg, #273338 0%, #2B5748 100%); color: white; border-radius: 16px;">
                <div class="inner">
                    <h3>{{ $oficinasCount }}</h3>
                    <p>Oficinas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-building"></i>
                </div>
                <a href="{{ route('oficinas.index') }}" class="small-box-footer" style="color: white;">
                    Ver oficinas <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="border: none; border-radius: 16px; box-shadow: 0 10px 30px rgba(39, 51, 56, 0.10);">
                <div class="card-header" style="background: #f7fbf6; border-bottom: 1px solid #e8efe3; border-radius: 16px 16px 0 0;">
                    <h3 class="card-title"><i class="fas fa-list mr-2" style="color: #2B5748;"></i> Últimos activos registrados</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Oficina</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ultimosActivos as $activo)
                                <tr>
                                    <td><strong>{{ $activo->codigo }}</strong></td>
                                    <td>{{ $activo->descrip }}</td>
                                    <td><span class="badge" style="background-color: rgba(156, 176, 128, 0.20); color: #2B5748;">{{ $activo->estado->descrip ?? 'Sin estado' }}</span></td>
                                    <td>{{ $activo->oficina->nombre ?? 'Sin oficina' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">No hay activos registrados aún.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card" style="border: none; border-radius: 16px; box-shadow: 0 10px 30px rgba(39, 51, 56, 0.10);">
                <div class="card-header" style="background: #f7fbf6; border-bottom: 1px solid #e8efe3; border-radius: 16px 16px 0 0;">
                    <h3 class="card-title"><i class="fas fa-chart-pie mr-2" style="color: #2B5748;"></i> Resumen por estado</h3>
                </div>
                <div class="card-body">
                    @forelse ($estadosResumen as $estado)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ $estado->descrip }}</span>
                            <span class="badge" style="background-color: #2B5748; color: white;">{{ $estado->activos_count }}</span>
                        </div>
                    @empty
                        <p class="text-muted mb-0">No hay estados registrados.</p>
                    @endforelse
                </div>
            </div>

            <div class="card mt-4" style="border: none; border-radius: 16px; box-shadow: 0 10px 30px rgba(39, 51, 56, 0.10);">
                <div class="card-header" style="background: #f7fbf6; border-bottom: 1px solid #e8efe3; border-radius: 16px 16px 0 0;">
                    <h3 class="card-title"><i class="fas fa-user-tie mr-2" style="color: #2B5748;"></i> Responsables</h3>
                </div>
                <div class="card-body">
                    <h3 class="mb-0">{{ $responsablesCount }}</h3>
                    <p class="text-muted mb-0">responsables asignados al sistema.</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .small-box-footer {
            border-radius: 0 0 16px 16px;
        }
    </style>
@stop