<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        Auth::noAuth();

        parent::__construct();
    }

    public function index()
    {
        Auth::administrador();
        $usuarios = UsuariosModel::listEqual('usuarios');
        $rol = UsuariosModel::listEqual('roles');
        $data['page_name'] = "Usuarios";
        $data['function_js'] = "Usuarios.js";
        $data['function_js_Register'] = "Register.js";
        $data['usuarios'] = $usuarios;
        $data['rol'] = $rol;

        $this->views->getView($this, 'index', $data);
    }

    public function listar_usuario()
    {
        Auth::administrador();
        $productos = UsuariosModel::join('usuarios', 'roles', 'id_rol', 'id_rol');

        echo json_encode($productos);
    }

    public function save()
    {
        Auth::administrador();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();
            $val->name('nombre')->value(limpiar($_POST['nombre']))->required();
            $val->name('rol')->value(limpiar($_POST['rol']))->required();
            $val->name('Email')->value(limpiar($_POST['Email']))->required();
            $val->name('Contraseña')->value(limpiar($_POST['pwd']))->required();
            $val->name('Imagen')->value(limpiar($_POST['firma']))->required();
            if ($val->isSuccess()) {
                $passHash = $_POST['pwd'];
                $dataProductos = [
                    'id_usuario' => limpiar($_POST['codigo']),
                    'nombre' => limpiar($_POST['nombre']),
                    'email' => limpiar($_POST['Email']),
                    'firma' => limpiar($_POST['firma']),
                    'password' => $passHash,
                    'id_rol' => limpiar($_POST['rol'])
                ];

                $idInsert = UsuariosModel::insert('usuarios', $dataProductos);
                $data = ['status' => true, 'msg' => 'Registro guardado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
    public function update()
    {
        Auth::administrador();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();
            $val->name('nombre')->value(limpiar($_POST['nombre']))->required();
            $val->name('rol')->value(limpiar($_POST['rol']))->required();
            $val->name('Email')->value(limpiar($_POST['Email']))->required();
            $val->name('Contraseña')->value(limpiar($_POST['pwd']))->required();
            if ($val->isSuccess()) {
                $passHash = $_POST['pwd'];
                if (limpiar($_POST['firma']) === '') {
                    $dataProductos = [
                        'id_usuario' => limpiar($_POST['codigo']),
                        'nombre' => limpiar($_POST['nombre']),
                        'email' => limpiar($_POST['Email']),
                        'is_activo'=>limpiar($_POST['estado']),
                        'password' => $passHash,
                        'id_rol' => limpiar($_POST['rol'])
                    ];
                } else {
                    $dataProductos = [
                        'id_usuario' => limpiar($_POST['codigo']),
                        'nombre' => limpiar($_POST['nombre']),
                        'email' => limpiar($_POST['Email']),
                        'firma' => limpiar($_POST['firma']),
                        'is_activo'=>limpiar($_POST['estado']),
                        'password' => $passHash,
                        'id_rol' => limpiar($_POST['rol'])
                    ];
                }
                $dataProductoscodigo = [
                    'id_usuario' => limpiar($_POST['codigo']),
                ];
                $idInsert = UsuariosModel::update('usuarios', $dataProductos, $dataProductoscodigo);
                $data = ['status' => true, 'msg' => 'Registro Actualizado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }
    public function delet()
    {
        Auth::administrador();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();

            if ($val->isSuccess()) {
                $dataProductos = [
                    'id_usuario' => $_POST['codigo']
                ];
                $idInsert = UsuariosModel::delete('usuarios', $dataProductos);
                $data = ['status' => true, 'msg' => 'Registro Eliminado'];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function buscar_unregistro()
    {
        Auth::administrador();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $val = new Validations();
            $val->name('codigo')->value(limpiar($_POST['codigo']))->required();

            if ($val->isSuccess()) {

                $idInsert = UsuariosModel::search_Usuario($_POST['codigo']);
                $data = ['status' => true, 'msg' => 'Registro Encontrado', 'data' => $idInsert];
            } else {
                $data = ['error' => $val->getErrors()];
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    public function rol()
    {
        Auth::administrador();
        $productos = UsuariosModel::listEqual('roles');
        echo json_encode($productos);
    }

    public function apidni()
    {
        // Datos
        $token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
        $dni = $_POST["idcliente"];

        // Iniciar llamada a API
        $curl = curl_init();

        // Buscar dni
        if (strlen($dni) == 8) {

            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $dni,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 2,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Referer: https://apis.net.pe/consulta-dni-api',
                        'Authorization: Bearer ' . $token
                    ),
                )
            );

        } else {
            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => 'https://api.apis.net.pe/v1/ruc?numero=' . $dni,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Referer: http://apis.net.pe/api-ruc',
                        'Authorization: Bearer ' . $token
                    ),
                )
            );
        }

        $response = curl_exec($curl);

        curl_close($curl);
        // Datos listos para usar

        $persona = json_decode($response);
        if (empty($persona)) {
            $dato = "";
        } else {
            $dato = json_decode($response);
        }
        echo json_encode($dato);

    }

    public function Departamento()
    {
        if ($_GET["id"]) {
            $productos = UsuariosModel::listEqual('ubigeo', ['id_padre_ubigeo' => $_GET['id']]);

            echo json_encode($productos);
        }
    }

    public function activarStado(){
        $estado=$_POST['estado'];
        $id=$_POST['idusuario'];
        $actualizar = UsuariosModel::update('usuarios',['is_activo'=>$estado],['id_usuario'=>$id]);

        if($actualizar){
            $data = "correcto";
        }else{
            $data= "error";
        }
        echo $data;
    }

    

}