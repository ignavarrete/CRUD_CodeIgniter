<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class InformacionHistoricaModel extends Model
{
    protected $table = 'informacionfinanciero';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombreIndicador', 'codigoIndicador', 'unidadMedidaIndicador', 'valorIndicador', 'fechaIndicador'];
 
    public function __construct() {
        parent::__construct();
        $db = \Config\Database::connect();
        $builder = $db->table('informacionfinanciero');
    }

    public function insertar_data($data) {
        if($this->db->table($this->table)->insert($data))
        {
            return $this->db->insertID();
        }
        else
        {
            return false;
        }
    }
}



?>