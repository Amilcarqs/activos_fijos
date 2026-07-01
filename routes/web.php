<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\ActivoController;
use App\Models\Activo;
use App\Models\Estado;
use App\Models\Grupo;
use App\Models\Oficina;
use App\Models\Responsable;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $activosCount = Activo::count();
    $estadosCount = Estado::count();
    $gruposCount = Grupo::count();
    $oficinasCount = Oficina::count();
    $responsablesCount = Responsable::count();
    $ultimosActivos = Activo::with(['estado', 'grupo', 'oficina', 'responsable'])->latest()->take(5)->get();
    $estadosResumen = Estado::withCount('activos')->orderByDesc('activos_count')->get();

    return view('dashboard', compact(
        'activosCount',
        'estadosCount',
        'gruposCount',
        'oficinasCount',
        'responsablesCount',
        'ultimosActivos',
        'estadosResumen'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/estados', EstadoController::class);
Route::resource('/grupos', GrupoController::class);
Route::resource('/oficinas', OficinaController::class);
Route::resource('/responsables', ResponsableController::class);

Route::get('/activos/pdf', [ActivoController::class, 'pdf'])
    ->name('activos.pdf');
Route::get('/activos/qr', [ActivoController::class, 'qr'])
    ->name('activos.qr');

Route::resource('/activos', ActivoController::class);

require __DIR__.'/auth.php';
