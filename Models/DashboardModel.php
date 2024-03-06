<?php
class DashboardModel extends DB
{
  public function __construct()
  {
    parent::__construct();

  }
  public static function Contar_ventas()
  {
    $sql = "SELECT proforma.idusuario,usuarios.nombre,count(*) as totalventas FROM proforma INNER JOIN usuarios on usuarios.id_usuario=proforma.idusuario
    GROUP BY idusuario 
    HAVING COUNT(*)>0;";
    return ($rows = parent::query($sql, []));
  }
}