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


Route::get('pacient/vista01', [PacientController::class, 'vista01']);
Route::get('/crear-copia-de-seguridad', [PacientController::class, 'crearCopiaDeSeguridad'])
    ->name('crear-copia-de-seguridad');

Route::view('updateMedicament', 'updateMedicament');
Route::post('updateMedicament', 'PacientController@updateMedicamentName')->name('updateMedicament');


