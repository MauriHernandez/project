<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function crearCopiaDeSeguridad()
{
    try {
        $backupJob = (new BackupJob())->run();

        return "Copia de seguridad creada correctamente en " . $backupJob->backupDestination()->backupName();
    } catch (\Exception $e) {
        return "Error al crear la copia de seguridad: " . $e->getMessage();
    }
}
}
