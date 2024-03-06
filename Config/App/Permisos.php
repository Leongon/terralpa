<?php
class Permisos
{


    public static function getPermisos()
    {
        $rol = "";
        if ($_SESSION['id_rol'] == "1") {
            $rol = "Sin rol";
        }
        if ($_SESSION['id_rol'] == "2") {
            $rol = "Administracion";
        }
        if ($_SESSION['id_rol'] == "3") {
            $rol = "ventas";
        }
        if ($_SESSION['id_rol'] == "4") {
            $rol = "Almacen";
        }
        if ($_SESSION['id_rol'] == "5") {
            $rol = "Contador";
        }

         echo $rol;


    }

}






?>