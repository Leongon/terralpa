<?php
class ProductoModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function search_producto($codigo,$lugar){
        $sql = "SELECT * FROM producto a INNER JOIN precio b on a.codigo=b.codigo_idcodigo WHERE a.codigo=:codigo and b.lugar_id_lugar=:lugar";
        return ($rows = parent::query($sql, ['codigo' => $codigo,'lugar' => $lugar])) ? $rows[0] : [];
    }
    public static function search_producto_precio($codigo,$codigo2){
        $sql = "SELECT * FROM precio WHERE id_lugar = :codigo and codigo_producto= :codigos  LIMIT 1";
        return ($rows = parent::query($sql, ['codigo' => $codigo,'codigos' => $codigo2,])) ? $rows[0] : [];
    }

    public static function lista_productos($codigo){
        $sql = "SELECT producto.codigo, producto.descripcion, producto.Unid, producto.peso, producto.cantidad, producto.img, producto.categoria_idcategoria,precio.idprecio, precio.precio, precio.lugar_id_lugar, precio.codigo_idcodigo FROM precio INNER JOIN producto on precio.codigo_idcodigo=producto.codigo WHERE precio.lugar_id_lugar = :codigo GROUP by precio.codigo_idcodigo ;;";
        return ($rows = parent::query($sql, ['codigo' => $codigo])) ?  : [];   
    }

  
}
