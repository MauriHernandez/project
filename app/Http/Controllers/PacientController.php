<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Spatie\Backup\BackupDestination\Backup;
use Spatie\Backup\Tasks\Backup\BackupJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class PacientController extends Controller
{
    public function index()
    {
        //
    }

    public function vista01()
{



    $pacients = DB::table('infoPacient AS IP')
        ->leftJoin('infoDoctor AS ID', 'IP.user_id', '=', 'ID.user_idD')
        ->leftJoin('infoNurse AS INU', 'IP.user_id', '=', 'INU.user_idN')
        ->select(
            'IP.id AS patient_id',
            'IP.name AS patient_name',
            'ID.id AS doctor_id',
            'ID.name AS doctor_name',
            'INU.id AS nurse_id',
            'INU.name AS nurse_name'
        )        ->get();
    
    $data = [
        'pacients' => $pacients
    ];
    
    return view('pacient/vista01', $data);
    

}
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

