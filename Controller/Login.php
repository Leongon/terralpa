<?php
class Login extends Controller
{
  public function __construct()
  {
    if(isset($_SESSION['login'] )){
      header('Location:' . base_url . '/Productos');
    }
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Ingreso al sistema';
    $data['function_js'] = 'Login.js';
    $this->views->getView($this, 'index', $data);
  }

  public function ingresar()
  {
    $arrJson = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $val = new Validations();
      $val->name('email')->value($_POST['email'])->required();
      $val->name('password')->value($_POST['password'])->required();

      // si todo esta bien se logea
      if ($val->isSuccess()) {
        // logearse
        $usuario = LoginModel::login(limpiar($_POST['email']), limpiar($_POST['password']));

        if (empty($usuario)) {
          $arrJson = ['error' => 'Estas credenciales no exiten en nuestro sistema o el usuario no existe'];
        } else {
          // crear nuestras sessiones

          $_SESSION['idSession'] = $usuario['id_usuario'];
          $_SESSION['nombre'] = $usuario['nombre'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['id_rol'] = $usuario['id_rol'];
          $_SESSION['login'] = true;
          $_SESSION['id_usuario'] = $usuario['id_usuario'];
          $arrJson = ['msg' => 'El usuario se ha logeado'];
        }
      } else {
        $arrJson = ['error' => $val->getErrors()];
      }
    }




    echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
  }
}
