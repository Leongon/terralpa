<?php
class Productos extends Controller
{
  public function __construct()
  {
    Auth::noAuth();
    parent::__construct();
  }

  public function index()
  {
    $productos = ProductosModel::listEqual('producto');
    /*  $productos = ProductosModel::join('productos', 'categorias', 'id_categoria_pro', 'id_cat', ['id_categoria_pro' => 1],1); */
    $data['page_name'] = "Productos";
    $data['productos'] = $productos;
    $data['function_js'] = 'productos.js';
    $this->views->getView($this, "index", $data);
  }
  public function Productos()
  {

    $productos = ProductosModel::productos($_POST['idlugar']);
    /*  $productos = ProductosModel::join('productos', 'categorias', 'id_categoria_pro', 'id_cat', ['id_categoria_pro' => 1],1); */
    $data['productos'] = $productos;

    echo json_encode($productos);
  }
  public function lugares()
  {
    $productos = ProductosModel::listEqual('lugar');
    /*  $productos = ProductosModel::join('productos', 'categorias', 'id_categoria_pro', 'id_cat', ['id_categoria_pro' => 1],1); */
    print_r(json_encode($productos));
  }

  public function Productos_categoria()
  {
    $productos = ProductosModel::listEqual('categoria');
    /*  $productos = ProductosModel::join('productos', 'categorias', 'id_categoria_pro', 'id_cat', ['id_categoria_pro' => 1],1); */

    $data['productos'] = $productos;
    print_r(json_encode($productos));

  }

  public function pdf()
  {
    if (@$_GET["id"] == "") {
      Auth::error404();
    } else {
      $data['productos'] = "pdf";
      $data['dni_vendedor'] = $_GET['id'];

      $data["boleta"] = ProductosModel::listEqual("proforma", ["id" => $_GET["id"]]);
      foreach ($data["boleta"] as $valor) {
        $data['nroBoleta'] = $valor["id"];
        $data['Dniusuario'] = $valor["idusuario"];
        $data['descripcion'] = $valor["descripcion"];
        $data['FechaInicial'] = $valor["fechaInicial"];
        $data['fechaV'] = $valor["fechav"];
        $data['departamento'] = $valor["departamento"];
        $data['provincia'] = $valor["provincia"];
        $data['distrito'] = $valor["distrito"];
        $data['direccion'] = $valor["direccion"];
        $data['chkobservaciones'] = $valor["observaciones"];
        $data['idcliente'] = $valor["idcliente"];
        $data['pagos'] = $valor["pagos"];
      }
      
      $data["cliente"] = ProductosModel::listEqual("clientes", ["id_cliente" => $data['idcliente']]);

      if ($data["cliente"]) {
        foreach ($data["cliente"] as $valor) {

          $data['nombre'] = $valor["nombre"];
          $data["telefono"] = $valor["telefono"];

        }
      } else {
        $data['nombre'] = "";
        $data["telefono"] = "";
      }
      
      $datoDescripcion=json_decode($data['descripcion'],true);
      
      $img=[];
      foreach ($datoDescripcion as $valor) {
        $datoCodigo= $valor['producto']['codigo'];
        $img[]=$data["cliente"] = ProductosModel::listEqual("producto", ["codigo" => $datoCodigo]);
        
      }

      $data['imgproducto']=$img;

      $data['ubigeo1'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['departamento']]);

      foreach ($data['ubigeo1'] as $valor) {
        $data['departamentos'] = $valor["nombre_ubigeo"];
      }

      $data['ubigeo2'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['provincia']]);

      foreach ($data['ubigeo2'] as $valor) {
        $data['provincias'] = $valor["nombre_ubigeo"];
      }

      $data['ubigeo3'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['distrito']]);
      foreach ($data['ubigeo3'] as $valor) {
        $data['distritos'] = $valor["nombre_ubigeo"];
      }

      $data['observaciones'] = ProductosModel::listEqual("observaciones");
      $buscarobservaciones = explode("[", $data['chkobservaciones']);

      $buscarobservaciones1 = explode("]", $buscarobservaciones[1]);

      $buscarobservacion = explode(",", $buscarobservaciones1[0]);

      $buscarobservacionencontrada = [];

     

      foreach ($buscarobservacion as $valor) {
        $buscarArray = array_search($valor, array_column($data['observaciones'], 'codigo'));
        $buscarobservacionencontrada[] = $data['observaciones'][$buscarArray];
        
      }
      $data['observacion'] = $buscarobservacionencontrada;
      
     
      $data["usuario"] = ProductosModel::listEqual("usuarios", ["id_usuario" => $data['Dniusuario']]);

      foreach ($data["usuario"] as $valor) {
        $data["vendedor_vendedor"] = $valor["firma"];
      }

       $this->views->getView($this, "pdf", $data);
 
    }

  }

  public function pdf_contrata()
  {
    if (@$_GET["id"] == "") {
      Auth::error404();
    } else {
      $data['productos'] = "pdf";
      $data['dni_vendedor'] = $_GET['id'];

      $data["boleta"] = ProductosModel::join("proforma",'contrata','id','proforma_id', ["id" => $_GET["id"]]);
      if ($data["boleta"]) {
        foreach ($data["boleta"] as $valor) {
          $data['nroBoleta'] = $valor["idcontrata"];
          $data['Dniusuario'] = $valor["idusuario"];
          $data['descripcion'] = $valor["descripcion"];
          $data['FechaInicial'] = $valor["fechaInicial"];
          $data['fechaV'] = $valor["fechav"];
          $data['departamento'] = $valor["departamento"];
          $data['provincia'] = $valor["provincia"];
          $data['distrito'] = $valor["distrito"];
          $data['direccion'] = $valor["direccion"];
          $data['chkobservaciones'] = $valor["observaciones"];
          $data['idcliente'] = $valor["idcliente"];
          $data['pagos'] = $valor["pagos"];
        }
        $data["cliente"] = ProductosModel::listEqual("clientes", ["id_cliente" => $data['idcliente']]);

        if ($data["cliente"]) {
          foreach ($data["cliente"] as $valor) {

            $data['nombre'] = $valor["nombre"];
            $data["telefono"] = $valor["telefono"];

          }
        } else {
          $data['nombre'] = "";
          $data["telefono"] = "";
        }
        $datoDescripcion=json_decode($data['descripcion'],true);
      
        $img=[];
   
        foreach ($datoDescripcion as $valor) {
          $datoCodigo= $valor['producto']['codigo'];
          $img[]=$data["cliente"] = ProductosModel::listEqual("producto", ["codigo" => $datoCodigo]);
     
        }
  
        $data['imgproducto']=$img;

        $data['ubigeo1'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['departamento']]);
        foreach ($data['ubigeo1'] as $valor) {
          $data['departamentos'] = $valor["nombre_ubigeo"];
        }
        $data['ubigeo2'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['provincia']]);
        foreach ($data['ubigeo2'] as $valor) {
          $data['provincias'] = $valor["nombre_ubigeo"];
        }

        $data['ubigeo3'] = ProductosModel::listEqual("ubigeo", ["id_ubigeo" => $data['distrito']]);
        foreach ($data['ubigeo3'] as $valor) {
          $data['distritos'] = $valor["nombre_ubigeo"];
        }

        $data['observaciones'] = ProductosModel::listEqual("observaciones");
        $buscarobservacion = explode(",", $data['chkobservaciones']);
        $buscarobservacionencontrada = [];
        foreach ($buscarobservacion as $valor) {
          $buscarArray = array_search($valor, array_column($data['observaciones'], 'codigo'));
          $buscarobservacionencontrada[] = $data['observaciones'][$buscarArray];
        }
        $data['observacion'] = $buscarobservacionencontrada;

        $data["usuario"] = ProductosModel::listEqual("usuarios", ["id_usuario" => $data['Dniusuario']]);

        foreach ($data["usuario"] as $valor) {
          $data["vendedor_vendedor"] = $valor["firma"];
        }

        $this->views->getView($this, "contrata", $data);
      } else {
        Auth::error404();
      }
    }

  }

  public function save()
  {
    date_default_timezone_set('America/Lima');
    $data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      // validar
      $val = new Validations();
      $val->name('productos')->value(limpiar($_POST['productos']))->required();

      if ($val->isSuccess()) {
        $Bcliente = ProductosModel::listEqual('clientes', ["id_cliente" => $_POST['id_cliente']]);
        

        if(empty($_POST['id_cliente']) ){
          $idclientes=0;
        }else{
          $idclientes=$_POST['id_cliente'];
        }

        if(empty($_POST['nombre'])){
          $nombre="s/n";
        }else{
          $nombre=$_POST['nombre'];
        }
        if($_POST['telefono']){
          $telefono=0;
        }else{
          $telefono=$_POST['telefono'];
        }
        $datacliente = [
          'id_cliente' => $idclientes,
          'nombre' => $nombre,
          'telefono' => $telefono,
        ];
        $idclientes = '';
        if (empty($Bcliente)) {
          $idclientes = ProductosModel::insert('clientes', $datacliente);
          if ($idclientes == false) {
            $idclientes = true;
          }
        } else {
          $idclientes = ProductosModel::update('clientes', $datacliente, ['id_cliente' => $_POST['id_cliente']]);
        }
        if ($idclientes) {
          $fecha_inicio = date("d-m-Y");
          $fecha_fin = date("d-m-Y", strtotime($fecha_inicio . "+ 15 days"));
          $datacliente = [
            'idusuario' => $_POST['id_usuario'],
            'descripcion' => $_POST['productos'],
            'fechaInicial' => $fecha_inicio,
            'fechav' => $fecha_fin,
            'departamento' => $_POST['departamento'],
            'provincia' => $_POST['provincia'],
            'distrito' => $_POST['Distrito'],
            'direccion' => $_POST['Direccion'],
            'observaciones' => $_POST['ChkObservaciones'],
            'idcliente' => $_POST['id_cliente'],
            'pagos' => $_POST['pagos'],
            
          ];
          $idInsert = ProductosModel::insert('proforma', $datacliente);
          if($idInsert && $_POST['ctr']==1){
            $contrata = ProductosModel::insert('contrata ', ['proforma_id'=>$idInsert]);
            $dataContra= true;
          }else{
            $dataContra=false;
          }

        }
        $data = ['id' => $idInsert,'contrata'=>$dataContra, 'status' => true, 'msg' => 'Registro guardado'];
      } else {
        $data = ['error' => $val->getErrors()];
      }
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);

  }
  public function b_cliente()
  {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

      $b_cliente = ProductosModel::b_cliente(limpiar($_POST['dni']));

    }
    echo json_encode($b_cliente);

  }

  public function pdfLista()
  {
    date_default_timezone_set('America/Lima');
    $data['productos'] = "pdf";

    $data['function_js'] = "pdf.js";
    $data["boleta"] = ProductosModel::listEqual('proforma');

    $array = [];
    if ($data["boleta"]) {
      foreach ($data["boleta"] as $valor) {
        $id = $valor["id"];
        
        $fechav = strtotime($valor["fechav"]);
        $fechaA = strtotime(date("d-m-Y"));
        if ($fechaA > $fechav) {
          $cambiar_estado = ProductosModel::update('proforma', ['estado' => 1], ['id' => $id]);
        }
      }
      if (($_SESSION['id_rol'] == "2")) {
        $data["boleta2"] = ProductosModel::join('proforma', 'clientes', 'idcliente', "id_cliente");
        foreach ($data["boleta2"] as $valor) {
          $nombre = $valor["nombre"];
          $id = $valor["id"];
          $fechaInicial = $valor["fechaInicial"];
          $fechav = $valor["fechav"];
          $descripcion=$valor["descripcion"];
          if ($valor['estado'] == 1) {
            $estado = "Fecha Vencida";
          } else {
            $estado = "pendiente";
          }
          $array[] = ["nombre" => $nombre, "id" => $id, "fechaInicial" => $fechaInicial, "fechav" => $fechav, "estado" => $estado,"descripcion"=>$descripcion];
        }
      } else {
        $data["boleta2"] = ProductosModel::join('proforma', 'clientes', 'idcliente', "id_cliente", ["estado" => 0]);
        if ($data["boleta2"]) {
          foreach ($data["boleta2"] as $valor) {
            $nombre = $valor["nombre"];
            $id = $valor["id"];
            $fechaInicial = $valor["fechaInicial"];
            $fechav = $valor["fechav"];
            $descripcion=$valor["descripcion"];
            if ($valor['estado'] == 1) {
              $estado = "Fecha Vencida";
            } else {
              $estado = "pendiente";
            }
            $array[] = ["nombre" => $nombre, "id" => $id, "fechaInicial" => $fechaInicial, "fechav" => $fechav, "estado" => $estado,"descripcion"=>$descripcion];
          }
        }
      }
    }
    echo json_encode($array);

  }

  public function pdfListas()
  {
    $data['productos'] = "pdf";

    $data['function_js'] = "pdf.js";

    $this->views->getView($this, "ListaPDF", $data);
  }

  public function ListaContratas()
  {
    $data['productos'] = "Contrata Lista";

    $data['function_js'] = "ContrataLista.js";

    $this->views->getView($this, "listaContratas", $data);
  }
  public function ListaContrata()
  {
    date_default_timezone_set('America/Lima');
    $data['productos'] = "pdf";

    $data['function_js'] = "pdf.js";
    $data["boleta"] = ProductosModel::listEqual('proforma');

    $array = [];
    if ($data["boleta"]) {
      foreach ($data["boleta"] as $valor) {
        $id = $valor["id"];
        
        $fechav = strtotime($valor["fechav"]);
        $fechaA = strtotime(date("d-m-Y"));
        if ($fechaA > $fechav) {
          $cambiar_estado = ProductosModel::update('proforma', ['estado' => 1], ['id' => $id]);
        }
      }
      if (($_SESSION['id_rol'] == "2")) {
        $data["boleta2"] = ProductosModel::join('proforma', 'contrata', 'id', "proforma_id");
        foreach ($data["boleta2"] as $valor) {
          $idcontrata = $valor["idcontrata"];
          $id = $valor["id"];
          $fechaInicial = $valor["fechaInicial"];
          $fechav = $valor["fechav"];
          $descripcion=$valor["descripcion"];
          if ($valor['estado'] == 1) {
            $estado = "Fecha Vencida";
          } else {
            $estado = "pendiente";
          }
          $array[] = ["idcontrata" => $idcontrata, "id" => $id, "fechaInicial" => $fechaInicial, "fechav" => $fechav, "estado" => $estado,"descripcion"=>$descripcion];
        }
      } else {
        $data["boleta2"] = ProductosModel::join('proforma', 'clientes', 'idcliente', "id_cliente", ["estado" => 0]);
        if ($data["boleta2"]) {
          foreach ($data["boleta2"] as $valor) {
            $nombre = $valor["nombre"];
            $id = $valor["id"];
            $fechaInicial = $valor["fechaInicial"];
            $fechav = $valor["fechav"];
            $descripcion=$valor["descripcion"];
            if ($valor['estado'] == 1) {
              $estado = "Fecha Vencida";
            } else {
              $estado = "pendiente";
            }
            $array[] = ["nombre" => $nombre, "id" => $id, "fechaInicial" => $fechaInicial, "fechav" => $fechav, "estado" => $estado,"descripcion"=>$descripcion];
          }
        }
      }
    }
    echo json_encode($array);

  }
  public function img_firma()
  {
    if (@$_GET["id"] == "") {
      Auth::error404();
    } else {
      $data['productos'] = "pdf";
      $data['dni_vendedor'] = $_GET['id'];
      header("Content-type: image/jpeg");
      $data["boleta"] = ProductosModel::b_cotizacion(limpiar($data['dni_vendedor']));
      if ($data["boleta"]) {
        $this->views->getView($this, "img_firma", $data);

      } else {
        Auth::error404();
      }
    }
  }

  public function convertir()
  {
    $this->views->getView($this, "convertir");
  }

  public function buscar_proformas_activas_cliente()
  {
    $dni = $_POST['idcliente'];
    date_default_timezone_set('America/Lima');
    $data["boleta"] = ProductosModel::listEqual('proforma');
    if ($data["boleta"]) {
      foreach ($data["boleta"] as $valor) {
        $id = $valor["id"];
        $fechav = strtotime($valor["fechav"]);
        $fechaA = strtotime(date("d-m-Y"));
        if ($fechaA > $fechav) {
          $cambiar_estado = ProductosModel::update('proforma', ['estado' => 1], ['id' => $id]);
        }
      }
    }

    $data = [
      'idcliente' => $dni,
      'estado' => 0
    ];

    $result = ProductosModel::join('proforma', 'clientes', 'idcliente', 'id_cliente', $data);
    echo json_encode($result);
  }

  public function proforma_id()
  {
    $id = $_POST['IdCliente'];
    $result = ProductosModel::join('proforma', 'clientes', 'idcliente', 'id_cliente', ['id' => $id]);
    echo json_encode($result);
  }

}