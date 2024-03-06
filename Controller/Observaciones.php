<?php
class Observaciones extends Controller
{
    public function index()
    {
        $data['function_js'] = "observaciones.js";
        $this->views->getView($this, 'index',$data);
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('Observaciones')->value(limpiar($_POST['txtObservaciones']))->required();
            
            if ($val->isSuccess()) {
               
                $dataProductos = [
                    'observaciones' => $_POST['txtObservaciones'],
                
                ];

                $idInsert = ObservacionesModel::insert('observaciones', $dataProductos);
                $data = ['status' => true, 'msg' => 'Registro guardado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function listar()
    {   
    
        $productos = ObservacionesModel::listEqual('observaciones');
 
        echo json_encode($productos);
    }
    public function listarchkobs()
    {   
        $id= $_GET['id'];
        $productos = ObservacionesModel::listEqual('obs_catego',['idCategoria'=>$id,"estado"=> 1]);
 
        echo json_encode($productos);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('idcatogiria')->value(limpiar($_POST['idcatogiria']))->required();
            $val->name('idobservacion')->value(limpiar($_POST['idobservacion']))->required();
            $val->name('estado')->value(limpiar($_POST['estado']))->required();
          
            if ($val->isSuccess()) {
                $dataobservaciones = [
                    "estado" =>$_POST['estado'],
                    "idCategoria" =>$_POST['idcatogiria'],
                    "IdObservacion" =>$_POST['idobservacion']
                ];
                $B_Obs_cat=ObservacionesModel::listEqual('obs_catego', ["idCategoria"=>$_POST['idcatogiria'],"IdObservacion"=>$_POST['idobservacion']]);
                if(!$B_Obs_cat){
                   
                   
                    $idInsert = ObservacionesModel::insert('obs_catego',  $dataobservaciones);
                    $data = ['status' => true, 'msg' => 'Registro insertado'];
                }else {
                    $idInsert = ObservacionesModel::update('obs_catego',$dataobservaciones,["idCategoria"=>$_POST['idcatogiria'],"IdObservacion"=>$_POST['idobservacion']]);
                    $data = ['status' => true, 'msg' => 'Registro Actualizado'];
                }
                
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }

    public function buscar_unregistro()
    { 

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();

            if ($val->isSuccess()) {

                $idInsert = ObservacionesModel::search_Usuario($_POST['codigo']);
                $data = ['status' => true, 'msg' => 'Registro Encontrado', 'data' => $idInsert];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    
    public function updatechk()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();
          
            if ($val->isSuccess()) {
                $dataProductos = [
                    'estado' => limpiar($_POST['estado']),
                
                ];
                $dataProductoscodigo = [
                    'codigo' => limpiar($_POST['codigo']),
                ];
                $idInsert = ObservacionesModel::update('observaciones', $dataProductos, $dataProductoscodigo);
                $data = ['status' => true, 'msg' => 'Registro Actualizado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }

    public function listar_categoria(){
        $idInsert = ObservacionesModel::listEqual('categoria');
        echo json_encode( $idInsert );
    }


    public function savecategoria(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('idcatogiria')->value(limpiar($_POST['categoria']))->required();
            
          
            if ($val->isSuccess()) {
                $categoria = [
                    "nombreCategoria" =>$_POST['categoria']
                ];
               
                   
                    $idInsert = ObservacionesModel::insert('categoria',  $categoria);
                    $data = ['status' => true, 'msg' => 'Registro insertado'];
               
                
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

}