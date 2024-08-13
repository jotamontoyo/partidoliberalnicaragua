<?php

namespace App\Models;

use CodeIgniter\Model;

class SolicitudesModel extends Model
{
    protected $table            = 'solicitudes_patron';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'afiliado_id', 
        'afiliacion_id', 
        'nombre', 
        'apellidos', 
        'fecha_nacimiento',
        'genero',
        'cedula', 
        'cedula_img', 
        'tipo_doc', 
        'numero_doc', 
        'expedicion_doc', 
        'otra_identificacion', 
        'otra_identificacion_tipo', 
        'estado_id', 
        'departamento_id', 
        'municipio_id', 
        'ciudad', 
        'pais',
        'whatsapp',
        'email',
        'afiliado',
        'cargo',
        'posicion'
    ];

    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}
