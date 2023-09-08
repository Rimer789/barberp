<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Reserva1Controller;
use App\Http\Controllers\Reserva2Controller;
use App\Http\Controllers\Reserva3Controller;
use App\Http\Controllers\ComunicadoController;


Route::get('reservas/dia-actual', [ReservaController::class, 'reservasDelDia']);
Route::post('reservas', [ReservaController::class, 'store']);
Route::get('reservas/disponibilidad', [ReservaController::class, 'verificarDisponibilidad']);

Route::get('reservas1/dia-actual', [Reserva1Controller::class, 'reservasDelDia1']);
Route::post('reservas1', [Reserva1Controller::class, 'store1']);
Route::get('reservas1/disponibilidad', [Reserva1Controller::class, 'verificarDisponibilidad1']);

Route::get('reservas2/dia-actual', [Reserva2Controller::class, 'reservasDelDia2']);
Route::post('reservas2', [Reserva2Controller::class, 'store2']);
Route::get('reservas2/disponibilidad', [Reserva2Controller::class, 'verificarDisponibilidad2']);

Route::get('reservas3/dia-actual', [Reserva3Controller::class, 'reservasDelDia3']);
Route::post('reservas3', [Reserva3Controller::class, 'store3']);
Route::get('reservas3/disponibilidad', [Reserva3Controller::class, 'verificarDisponibilidad3']);

Route::post('comunicado', [ComunicadoController::class, 'publicar']);
Route::get('comunicados', [ComunicadoController::class, 'obtenerComunicados']);
Route::delete('comunicado/{id}', [ComunicadoController::class, 'eliminarComunicado']);
