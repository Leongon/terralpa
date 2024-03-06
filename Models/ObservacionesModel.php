<?php
class ObservacionesModel extends DB
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function search_Usuario($id)
    {
      $sql = "SELECT * FROM observaciones WHERE codigo= :codigo LIMIT 1";
      return ($rows = parent::query($sql, ['codigo' => $id])) ? $rows[0] : [];
      
    }

    public static function Observaciones($id)
    {
      $sql = "SELECT * FROM observaciones INNER JOIN obs_catego on observaciones.codigo=obs_catego.IdObservacion INNER JOIN categoria on categoria.idcategoria=obs_catego.idCategoria WHERE categoria.idcategoria=:idcategoria";
      return ($rows = parent::query($sql,['idcategoria'=>$id])) ?  : [];
      
    }
    public static function Observacionessinid()
    {
      $sql = "SELECT * FROM observaciones INNER JOIN obs_catego on observaciones.codigo=obs_catego.IdObservacion INNER JOIN categoria on categoria.idcategoria=obs_catego.idCategoria";
      return ($rows = parent::query($sql)) ?  : [];
      
    }
 
}
