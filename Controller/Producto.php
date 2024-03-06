<?php
class Producto extends Controller
{
    public function __construct()
    { 
        Auth::administrador();
        parent::__construct();
    }
    public function index()
    {

        $data['page_name'] = 'Productos';
        $data['function_js'] = 'Producto.list.js';
        $this->views->getView($this, 'index', $data);
    }

    public function listar_productos()
    {
        $productos = ProductoModel::lista_productos($_GET['id']);
        echo json_encode($productos);
    }
    public function listar()
    {

        $data = [
            "id_lugar" => $_GET['id'],

        ];
        $productos = ProductoModel::listEqual('producto');
        echo json_encode($productos);
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();
            $val->name('descripcion')->value(limpiar($_POST['descripcion']))->required();
            $val->name('Unid')->value(limpiar($_POST['Unid']))->required();
            $val->name('peso')->value(limpiar($_POST['peso']))->required();
            $val->name('cantidad')->value(limpiar($_POST['cantidad']))->required();
            $val->name('img')->value(limpiar($_POST['img']))->required();

            $val->name('lugar')->value(limpiar($_POST['lugar']))->required();
            $val->name('precio')->value(limpiar($_POST['precio']))->required();
            if ($val->isSuccess()) {
                $B_producto = ProductoModel::listEqual('producto', ['codigo' => $_POST['codigo']]);
                if (!$B_producto) {
                    $dataProductos = [
                        'codigo' => limpiar($_POST['codigo']),
                        'descripcion' => limpiar($_POST['descripcion']),
                        'Unid' => limpiar($_POST['Unid']),
                        'peso' => limpiar($_POST['peso']),
                        'cantidad' => limpiar($_POST['cantidad']),
                        'img' => $_POST['img']
                    ];
                    $idInsert = ProductoModel::insert('producto', $dataProductos);
                }

                $B_precio = ProductoModel::listEqual('precio', ['lugar_id_lugar' => $_POST['lugar'],'codigo_idcodigo' => $_POST['codigo']]);

                if(!$B_precio){
                    $dataProductos = [  
                    'precio' => limpiar($_POST['precio']),
                    'lugar_id_lugar' => limpiar($_POST['lugar']),
                    'codigo_idcodigo' => limpiar($_POST['codigo'])
                    ];
                    $idInsert = ProductoModel::insert('precio', $dataProductos);
                    $data = [ 'status' => true, 'msg' => 'Registro guardado'];
                }
                else{
                    $dataprecio= [
                        
                        'lugar_id_lugar' => limpiar($_POST['lugar']),
                        'codigo_idcodigo' => limpiar($_POST['codigo'])
                        ];
                    $dataProductos = [
                        'precio' => limpiar($_POST['precio']),
                        'lugar_id_lugar' => limpiar($_POST['lugar']),
                        'codigo_idcodigo' => limpiar($_POST['codigo'])
                        ];
                        $idInsert = ProductoModel::update('precio', $dataProductos,$dataprecio);
                        $data = ['status' => true, 'msg' => 'Registro Actualizado'];
                }

            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();
            $val->name('descripcion')->value(limpiar($_POST['descripcion']))->required();
            $val->name('Unid')->value(limpiar($_POST['Unid']))->required();
            $val->name('peso')->value(limpiar($_POST['peso']))->required();
            $val->name('cantidad')->value(limpiar($_POST['cantidad']))->required();
            $val->name('id_precio')->value(limpiar($_POST['id_precio']))->required();
            $val->name('img')->value(limpiar($_POST['img']))->required();

            $val->name('precio')->value(limpiar($_POST['precio']))->required();
            if ($val->isSuccess()) {
                $dataProductos = [
                    'descripcion' => limpiar($_POST['descripcion']),
                    'Unid' => limpiar($_POST['Unid']),
                    'peso' => limpiar($_POST['peso']),
                    'cantidad' => limpiar($_POST['cantidad']),
                    'img' => $_POST['img']
                    
                ];
                $dataProductoscodigo = [
                    'codigo' => limpiar($_POST['codigo']),
                ];
                $idInsert = ProductoModel::update('producto', $dataProductos, $dataProductoscodigo);
                ProductoModel::update('precio', ['precio' => $_POST['precio']], ['idprecio' => $_POST['id_precio']]);
                $data = ['status' => true,'img'=>$_POST['img'], 'msg' => 'Registro guardado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }
    public function delet()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();

            if ($val->isSuccess()) {
                $dataProductos = [
                    'codigo' => $_POST['codigo']
                ];
                $idInsert = ProductoModel::delete('producto', $dataProductos);
                $data = ['status' => true, 'msg' => 'Registro Eliminado'];
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
               
                $idInsert = ProductoModel::search_producto($_POST['codigo'], $_POST['lugar']);
                $data = ['status' => true, 'msg' => 'Registro Encontrado', 'data' => $idInsert];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function buscar_precio()
    {
        $productos = ProductoModel::search_producto_precio($_POST["id_lugar"], $_POST['id_producto']);
        ;
        echo json_encode($productos);
    }
    public function Lugar()
    {

        $productos = ProductoModel::listEqual('lugar');
        echo json_encode($productos);
    }

    public function save_precio()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('id_lugar')->value(limpiar($_POST['id_lugar']))->required();
            $val->name('Codigo')->value(limpiar($_POST['cod']))->required();
            $val->name('Precio')->value(limpiar($_POST['Precio']))->required();
            $val->name('idprecio')->value(limpiar($_POST['idprecio']))->required();


            if ($val->isSuccess()) {
                $dataProductos = [
                    'precio' => limpiar($_POST['Precio']),
                    'id_lugar' => limpiar($_POST['id_lugar']),
                    'codigo_producto' => limpiar($_POST['cod']),

                ];

                $dataid = [

                    'id_precio' => limpiar($_POST['idprecio']),
                ];
                $Buscar = ProductoModel::listEqual('precio', ['id_precio' => $_POST['idprecio']]);
                if ($Buscar) {

                    $idInsert = ProductoModel::update('precio', $dataProductos, $dataid);
                    $data = ['status' => true, 'msg' => 'Registro Actualizado'];
                } else {

                    $idInsert = ProductoModel::insert('precio', $dataProductos);
                    $data = ['status' => true, 'msg' => 'Registro Guardado'];
                }


            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }


}