<?php


function headerAdmin($data = "")
{
    $view_header = "Views/Templates/header.php";
    require_once($view_header); 
}
function nav($data = "")
{
    $view_header = "Views/Templates/navs.php";
    require_once($view_header); 
}

function footerAdmin($data = "")
{
    $view_footer = "Views/Templates/footer.php";
    require_once($view_footer);
}
function footer($data = "")
{
    $view_footer = "Views/Templates/footer2.php";
    require_once($view_footer);
}

function get_favicon()
{

    $path = FAVICON; //path
    $favicon = SITE_FAVICON;
    $type = '';
    $href = '';
    $placeholder = '<link rel="shortcut icon" href="%s" type="%s">';

    switch (pathinfo($path . $favicon, PATHINFO_EXTENSION)) {
        case 'ico':
            $type = 'image/vnd.microsoft.icon';
            $href = $path . $favicon;
            break;
        case 'png':
            $type = 'image/png';
            $href = $path . $favicon;
            break;
        case 'gif':
            $type = 'image/gif';
            $href = $path . $favicon;
            break;
        case 'svg':
            $type = 'image/svg+xml';
            $href = $path . $favicon;
            break;
        case 'jpg':
            $type = 'image/jpg';
            $href = $path . $favicon;
            break;


        default:
            return false;
            break;
    }

    return sprintf($placeholder, $href, $type);
}

function debug($data)
{ 
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

function get_logo()
{
    $default_logo = SITE_LOGO;
    $placeholder_image = 'https://via.placeholder.com/150x60';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}
function get_logo_inmobiliaria()
{
    $default_logo = SITE_LOGO_INMOBILIARIA;
    $placeholder_image = 'https://via.placeholder.com/150x60';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}
function get_logo_concretera()
{
    $default_logo = SITE_LOGO_CONCRETERA;
    $placeholder_image = 'https://via.placeholder.com/150x60';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}

function get_logo_constructora()
{
    $default_logo = SITE_LOGO_CONSTRUCTORA;
    $placeholder_image = 'https://via.placeholder.com/150x60';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}
function get_img()
{ 
    $default_logo = SITE_IMG;
    $placeholder_image = 'https://via.placeholder.com/150x60';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}
function get_img_Firma()
{
    $default_logo = SITE_IMG_FIRMA;
    $placeholder_image = 'http://192.168.100.4/terralpa//Productos/img_firma?id=50';

    if (!is_file(IMAGE_PATH . $default_logo)) {
        return  $placeholder_image;
    }

    return IMG . $default_logo;
}

function limpiar($datos)
{
    $datos = trim($datos);
    $datos = htmlspecialchars($datos, ENT_QUOTES, 'UTF-8');
    $datos =  iconv("UTF-8", "ISO-8859-1//IGNORE", "$datos");
    $datos = str_replace("[", "", $datos);
    $datos = str_replace("]", "", $datos);
    return $datos;
}

function messenger($data = "")
{
    $view_header = "Views/Templates/messenger.php";
    require_once($view_header); 
}