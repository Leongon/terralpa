<?php 
class Categoria extends Controller 
{


  public function index()
  {
    $data['function_js'] = "Categoria.js";
    $this->views->getView($this,'index',$data);
  }
  public function list()
  {
    $data = CategoriaModel::listEqual("categoria");
    echo json_encode($data);
  }
  public function buscar_unregistro()
  { 

      if ($_SERVER['REQUEST_METHOD'] == "POST") {
          $val = new Validations();
          $val->name('codigo')->value(limpiar($_POST['codigo']))->required();

          if ($val->isSuccess()) {

              $idInsert = CategoriaModel::listEqual('categoria',['idcategoria'=>$_POST['codigo']]);
              $data = ['status' => true, 'msg' => 'Registro Encontrado', 'data' => $idInsert];
          } else {
              $data = ['error' => $val->getErrors()];
          }
      }
      echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }


}

?>