<?php

class Auth
{
    public static function noAuth()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . base_url . '/Login');
        }
    }
    public static function logout()
    {
        session_start();
        session_destroy();
        $_SESSION = [];
        header('Location:' . base_url . '/Login');  
    }
    public static function error404()
    {
        header('Location:' . base_url . '/error');  
    }

    public static function administrador()
    {
        if ( !($_SESSION['id_rol'] == "2")  )   {
            header('Location:' . base_url . '/Dashboard');
        }
    }
}
    
?>