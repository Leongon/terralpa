<?php
class Register extends Controller
{
  public function __construct()
  {
  Auth::noAuth();
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Registrarse al sistema';
    $data['function_js'] = 'Register.js';
    $this->views->getView($this, 'register', $data);
  }

  public function save()
  {
    $data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      // validar
      $val = new Validations();
      $val->name('nombre')->value(limpiar($_POST['nombre']))->required();
      $val->name('email')->value(limpiar($_POST['email']))->pattern('email')->required();
      $val->name('password')->value(limpiar($_POST['password']))->min(5)->max(20)->pattern('alphanum')->equal(limpiar($_POST['rep_password']))->required();
      $val->name('Rol Usuario')->value(limpiar($_POST['rol']))->required();
      $val->name('dni')->value(limpiar($_POST['dni']))->required();

      if($val->isSuccess()){
        $passHash = $_POST['password'];
  
        $data = [
          'nombre'   => limpiar($_POST['nombre']),
          'email'    => limpiar($_POST['email']),
          'password' => $passHash,
          'id_usuario' => limpiar($_POST['dni']),
          'id_rol' => limpiar($_POST['rol']),
          
        ];
        $idInsert = RegisterModel::insert('usuarios', $data);
        $data = ['status' => true, 'msg' => 'Registro guardado'];
      }else{
        $data = ['error' => $val->getErrors()];
      }

     
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
  public function update()
  {
    $data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      // validar
      $val = new Validations();
      $val->name('nombre')->value(limpiar($_POST['nombre']))->required();
      $val->name('email')->value(limpiar($_POST['email']))->pattern('email')->required();
      $val->name('password')->value(limpiar($_POST['password']))->min(5)->max(20)->pattern('alphanum')->equal(limpiar($_POST['rep_password']))->required();
      $val->name('Rol Usuario')->value(limpiar($_POST['rol']))->required();
      $val->name('dni')->value(limpiar($_POST['dni']))->required();

      if($val->isSuccess()){
        $passHash = hash("sha256", limpiar($_POST['password']));
   
        $data = [
          'nombre'   => limpiar($_POST['nombre']),
          'email'    => limpiar($_POST['email']),
          'password' => $passHash,
          'id_usuario' => limpiar($_POST['dni']),
          'id_rol' => limpiar($_POST['rol']),
          
        ];
        $data2 = [
          
          'id_usuario' => limpiar($_POST['dni']),
        
          
        ];
        $idInsert = RegisterModel::update('usuarios', $data,$data2);
        $data = ['status' => true, 'msg' => 'Registro Actualizado'];
      }else{
        $data = ['error' => $val->getErrors()];
      }

     
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
  public function delet()
  {
    $data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      // validar
      $val = new Validations();
      
      $val->name('dni')->value(limpiar($_POST['dni']))->required();

      if($val->isSuccess()){
        
  
        
        $data = [
          
          'id_usuario' => limpiar($_POST['dni']),
        
          
        ];
        $idInsert = RegisterModel::delete('usuarios', $data);
        $data = ['status' => true, 'msg' => 'Registro Eliminado'];
      }else{
        $data = ['error' => $val->getErrors()];
      }

     
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
}
