<?php

namespace App\Models;

use CodeIgniter\Model;

class MunicipiosModel extends Model
{
    protected $table            = 'municipios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'codigo', 
        'departamento_codigo',
        'nombre'
    ];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}
