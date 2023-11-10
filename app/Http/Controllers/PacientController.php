<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Spatie\Backup\BackupDestination\Backup;
use Spatie\Backup\Tasks\Backup\BackupJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;

class PacientController extends Controller
{
    public function index()
    {
        //
    }

    public function pacientesTotal()
{
    $pacients = DB::table('infoPacient')
    ->select(
        'id', 'name', 'lastnameP', 'lastnameM'  
    )
    ->get();
 
    $data=[
        'pacients'=>$pacients
    ];

    return 

    view('pacient/pacientesTotal', $data);
    

}

public function pacientesInactivos()
{
    $pacients= DB::table ('infoPacient')
    ->select (
        'id', 'name', 'lastnameP', 'lastnameM' 
    ) 
    ->where ('status', '=', '0')
    ->get();
 
    $data=[
        'pacients'=>$pacients
    ];

    return 
    
    view('pacient/pacientesInactivos', $data);
}


public function pacientesActivos()
{
    $pacients= DB::table ('infoPacient')
    ->select (
        'id', 'name', 'lastnameP', 'lastnameM' 
    ) 
    ->where ('status', '=', '1')
    ->get();
 
    $data=[
        'pacients'=>$pacients
    ];

    return 
 
    view('pacient/pacientesInactivos', $data);
}

public function actualizarDatos(Request $request)
    {
       
        DB::beginTransaction();

        try {
           
            DB::table('infopacient')->update(['name' => 'Carlos Mauricio']);
            DB::table('infopacient')->delete();

           
            DB::commit();

            return "Operaciones exitosas";
        } catch (\Exception $e) {
          
            DB::rollback();

            return "Error: " . $e->getMessage();
        }
    }
}

