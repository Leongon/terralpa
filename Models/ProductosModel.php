<?php 
class ProductosModel extends DB
{
  public function __construct() 
  {
    parent::__construct();
    
  } 
  public static function b_cotizacion(string $codigo)
  {
    $sql = "SELECT *, clientes.nombre as nombrecli FROM proforma INNER JOIN clientes ON proforma.idcliente=clientes.id_cliente INNER JOIN usuarios on usuarios.id_usuario = proforma.idusuario WHERE proforma.id=:codigo LIMIT 1";
    return ($rows = parent::query($sql, ['codigo' => $codigo])) ? $rows[0] : [];
    
  }
  public static function b_cotizacion_todo()
  {
    $sql = "SELECT *, clientes.nombre as nombrecli FROM proforma INNER JOIN clientes ON proforma.idcliente=clientes.id_cliente WHERE proforma.id;";
    return ($rows = parent::query($sql)) ? $rows[0] : [];
  } 
  public static function b_cliente(string $codigo)
  {
    $sql = "SELECT * FROM clientes WHERE id_cliente =:codigo LIMIT 1";
    return ($rows = parent::query($sql, ['codigo' => $codigo])) ? $rows[0] : [];
  }

  public static function b_cliente_proforma(string $codigo)
  {
    $sql = "SELECT * FROM clientes WHERE id_cliente =:codigo LIMIT 1";
    return ($rows = parent::query($sql, ['codigo' => $codigo])) ? $rows[0] : [];
  }

  
  public static function productos(string $codigo)
  {
    $sql = "SELECT * FROM producto INNER JOIN precio on producto.codigo=precio.codigo_idcodigo WHERE  precio.precio > 0 and precio.lugar_id_lugar=:codigo";
    return ($rows = parent::query($sql, ['codigo' => $codigo])) ;
  }   
  
}