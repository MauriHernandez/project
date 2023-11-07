<?php

namespace App\Models;

use CodeIgniter\Model;

class PacientModel extends Model
{
    protected $table      = 'infopacient';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['user_id', 'name', 'lastnameP', 'lastnameM','birthday','gender', 'curp','phone', 'occupation','street','numberE','numberI','codPos', 'community', 'locality','state','numberA','levelA', 'numberT', 'status', 'created_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}