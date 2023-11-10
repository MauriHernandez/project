<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('pacient/pacientesTotal', [PacientController::class, 'pacientesTotal']);
Route::get('pacient/pacientesInactivos', [PacientController::class, 'pacientesInactivos']);
Route::get('pacient/pacientesActivos', [PacientController::class, 'pacientesActivos']);

Route::get('admin/respaldo', [AdminController::class, 'crearCopiaDeSeguridad'])->name('backup.create');
Route::get('admin/respaldo', [AdminController::class, 'crearCopiaDeSeguridad'])    
    ->name('crear-copia-de-seguridad');

    Route::get('pacient/transaccion', [PacientController::class, 'actualizarDatos']);


Route::view('updateMedicament', 'updateMedicament');
Route::post('updateMedicament', 'PacientController@updateMedicamentName')->name('updateMedicament');


