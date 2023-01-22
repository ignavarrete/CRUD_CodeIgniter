<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\InformacionHistoricaModel;

class InformacionHistorica extends Controller 
{
    public function index() 
    {
        $informacion = new InformacionHistoricaModel();

        $data['uf_detalles'] = $informacion->orderBy('id', 'ASC')->findAll();

        $data['header'] = view('template/header');
        $data['footer'] = view('template/footer');

        $data['addModal'] = view('modal/addModal');
        $data['updateModal'] = view('modal/updateModal');

        return view('listado', $data);
    }

    public function guardar()
    {

        $informacion = new InformacionHistoricaModel();

        $data = [
            'nombreIndicador' => $this->request->getVar('nombre'),
            'codigoIndicador' => $this->request->getVar('codigo'),
            'unidadMedidaIndicador' => $this->request->getVar('unidad'),
            'valorIndicador' => $this->request->getVar('valor'),
            'fechaIndicador' => $this->request->getVar('fecha')
        ];

        $save = $informacion->insertar_data($data);

        if($save != false) 
        {
            $data = $informacion->where('id', $save)->first();
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false, 'data' => $data));
        }

    }

    public function editar($id = null)
    {
        $informacion = new InformacionHistoricaModel();

        $data = $informacion->where('id', $id)->first();

        if($data) {
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false));
        }


    }

    public function actualizar()
    {
        helper(['form', 'url']);

        $informacion = new InformacionHistoricaModel();

        $id = $this->request->getVar('hiddenInfoId');

        $data = [
            'nombreIndicador' => $this->request->getVar('nombre'),
            'codigoIndicador' => $this->request->getVar('codigo'),
            'unidadMedidaIndicador' => $this->request->getVar('unidad'),
            'valorIndicador' => $this->request->getVar('valor'),
            'fechaIndicador' => $this->request->getVar('fecha'),
        ];

        $actualizar = $informacion->actualizar($id, $data);
        if($actualizar != false)
        {
            $data = $informacion->where('id', $id)->first();
            echo json_encode(array("status" => true, 'data' => $data));
        } else {
            echo json_encode(array("status" => false, 'data' => $data));
        }
    }

    public function eliminar($id = null) 
    {
        $informacion = new InformacionHistoricaModel();
        $eliminar = $informacion->where('id', $id)->delete();
        
        if($eliminar)
        {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

   

    
}

?>