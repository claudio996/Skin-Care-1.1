<?php

use App\Http\Controllers\Admin\ServiciosController;
use App\Http\Controllers\Admin\ZonasController;
use App\Http\Controllers\ServiciosMasculinos;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('Promocion-Masculina', [ServiciosMasculinos::class, 'PromocionMasculina']);
Route::get('Precios-Individuales', [ServiciosMasculinos::class, 'IndividualesMasculina']);

Route::get('Fotodepilacion-Femenina', [ServiciosFemeninos::class, 'FotodepilacionFemenina']);
Route::get('Promocion-Femenina', [ServiciosFemeninos::class, 'PromocionFemenina']);
Route::get('Individuales-Femenina', [ServiciosFemeninos::class, 'IndividualesFemenina']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('admin/zonas', [ZonasController::class, 'index'])->name('admin/zonas');;
    Route::post('admin/zonas-store', [ZonasController::class, 'store'])->name('admin/zonas-stores');;
    Route::get('admin/servicios', [ServiciosController::class, 'index'])->name('admin/servicios');
    Route::post('admin/servicios-store', [ServiciosController::class, 'store']);
    // Route::get('admin/reservas', [ReservasController::class, 'index'])->name('admin/reservas');
});
