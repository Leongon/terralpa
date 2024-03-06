<?php
class DescripcionPago extends Controller
{
    public function index()
    {  
        $data['function_js'] = 'DescripcionPAgo.js';
        $this->views->getView($this, 'index',$data);
       
    }

    public function save()
    {
        $data=[
            "N_descripcion"=>$_POST['NDescrip'],
            "Estado"=>1,
        ];
         echo json_encode(DescripcionPagoModel::insert('descripcion_pago',$data));
    }

    public function update()
    {
        $data=[
            "N_descripcion"=>$_POST['NDescrip'],
           
         ];
        $dataID=[
            "idDescripcion_pago"=>$_POST['IdD'],
        ];
        echo json_encode(DescripcionPagoModel::update('descripcion_pago',$data,$dataID));
    }

    public function delet()
    {
        $dataID=[
            "idDescripcion_pago"=>$_POST['IdD'],
        ];
        echo json_encode(DescripcionPagoModel::delete('descripcion_pago',$dataID));
    }

    public function Listar()
    {
        
        echo json_encode(DescripcionPagoModel::listEqual('descripcion_pago'));
    }




}