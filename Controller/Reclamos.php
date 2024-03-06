<?php
class Reclamos extends Controller
{
    public function index()
    {
        $data['function_js'] = 'reclamos.js';
        $this->views->getView($this, 'index', $data);
    }
    public function save()
    {
       
        $email2 = $_POST['email2'];
     
        $archivo = $_FILES["archivo"];

        $file = $_FILES["archivo"]["name"]; //Nombre de nuestro archivo

        $validator = 1; //Variable validadora

        $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //Extensión de nuestro archivo

        $url_temp = $_FILES["archivo"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

        //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
        $url_insert = dirname(__FILE__) . "/files"; //Carpeta donde subiremos nuestros archivos

        //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
        $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

        //Si la carpeta no existe, la creamos
        if (!file_exists($url_insert)) {
            mkdir($url_insert, 0777, true);
        }
        ;

        //Validamos el tamaño del archivo
       

        //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso



        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // validar
            $val = new Validations();
            $val->name('tipo de dodumento')->value(limpiar($_POST['tipDoc']))->required();
            $val->name('Dni')->value(limpiar($_POST['Dni']))->required();
            $val->name('Nombre Razon Social')->value(limpiar($_POST['name']))->required();
            $val->name('Telefono')->value(limpiar($_POST['tel']))->required();
            $val->name('Direccion')->value(limpiar($_POST['domicilio']))->required();


            $val->name('Correo electronico')->value(limpiar($_POST['email']))->pattern('email')->required();
            $val->name('Correo electronico')->value(limpiar($_POST['email2']))->pattern('email')->required();


            $val->name('Tipo De sercvicio')->value(limpiar($_POST['tipservicio']))->required();
            $val->name('Descripcion')->value(limpiar($_POST['descripcion']))->required();
            $val->name('queja o Reclamo')->value(limpiar($_POST['tipqueja']))->required();
            $val->name('Detalles')->value(limpiar($_POST['Detalle']))->required();

            

    
            $file_size = $_FILES["archivo"]["size"];
            if ($file_size > 1000000) {
                echo "El archivo es muy pesado";
                $validator = 0;
            }
    
            //Validamos la extensión del archivo
            if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif" && $file_type != "pdf") {
                echo "Solo se permiten imágenes tipo JPG, JPEG, PNG & GIF";
                $validator = 0;
            }

            if ($val->isSuccess()) {


                if ($validator == 1) {
                    if (move_uploaded_file($url_temp, $url_target)) {
                        $msg = "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
                        $data = ['status' => true, 'msg' => 'Registro guardado','msg2' => $msg ];

                    } else {
                        $msg =  "Ha habido un error al cargar tu archivo.";
                        $data = ['status' => true, 'msg' => 'Registro guardado','msg2' => $msg ];

                    }
                } else {
                    $msg = "Error: el archivo no se ha cargado";
                    $data = ['status' => true, 'msg2' => $msg ];

                }

               

               /*  $data = [
                    'nombre' => limpiar($_POST['nombre']),
                    'email' => limpiar($_POST['email']),
                    'password' => $passHash,
                    'id_usuario' => limpiar($_POST['dni']),
                    'id_rol' => limpiar($_POST['rol']),

                ]; */
               /*  $idInsert = RegisterModel::insert('usuarios', $data); */
            } else {
                $data = ['error' => $val->getErrors()];
            }


        }

        echo json_encode($data, JSON_UNESCAPED_UNICODE);

    }

}