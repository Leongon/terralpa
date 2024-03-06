<?php

const base_url = 'http://192.168.100.52/terralpa';

define('SITE_LANG', 'es');

/* ----------------------------------------------------- */
/*             CONSTANTES PARA CONEXION DB                  */
/* ----------------------------------------------------- */

 const DB_HOST = "162.214.204.218";
const DB_NAME = "terralpc_proforma";
const DB_USER = "terralpc_terralpc";
const DB_PASSWORD = 'Bl@ckl30n2023';
const DB_CHARSET = "utf8";     
 /*
const DB_HOST = "localhost";
const DB_NAME = "terralpc_proforma";
const DB_USER = "root";
const DB_PASSWORD = '';
const DB_CHARSET = "utf8"; */

/* ----------------------------------------------------- */
/*             INFORMACION DEL SITIO                  */
/* ----------------------------------------------------- */
define('SITE_CHARSET', 'UTF-8');
define('SITE_NAME', 'GSF-CURSO');
define('SITE_VERSION', '1.0.0');
define('SITE_LOGO', 'Logo.gif');
define('SITE_LOGO_CONSTRUCTORA', 'logo_constructora.png');
define('SITE_LOGO_CONCRETERA', 'logo_concretera.png');
define('SITE_LOGO_INMOBILIARIA', 'logo_inmbiliaria.png');
define('SITE_IMG', 'MEMBRETETERRALPA.png');
define('SITE_FAVICON', 'android-icon-48x48.png');
define('SITE_DESC', 'GSF FRAMEWORK');
define('SITE_LOGO_MAIN', 'main.logo.png');

/* ----------------------------------------------------- */
/*             DIRECTORIOS DE LA APP                    */
/* ----------------------------------------------------- */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('CONTROLLER', ROOT . DS . 'Controller');
define('VIEW', ROOT . DS . "Views");
define('TEMPLATE', VIEW . DS . "Templates");
define('IMAGE_PATH', ROOT . DS . "Assets" . DS . "img" . DS);

/* ----------------------------------------------------- */
/*             ARCHIVOS PUBLICOS                         */
/* ----------------------------------------------------- */
define('ASSETS', base_url . '/Assets');
define('CSS', ASSETS . "/css");
define('JS', ASSETS . "/js");
define('PLUGINS', ASSETS . "/plugins");
define('FAVICON', ASSETS . "/favicon/");
define('FONTS', ASSETS . "/font-awesome");
define('IMG', ASSETS . "/img/");
define('UPLOADS', ASSETS . "/uploads");


/* ----------------------------------------------------- */
/*              CONTROLLER - METHOD - ERORR DEFAULT              */
/* ----------------------------------------------------- */

define('CONTROLLER_DEFAULT', 'Home');
define('METHOD_DEFAULT', 'index');
define('CONTROLLER_ERROR', 'Error404');
