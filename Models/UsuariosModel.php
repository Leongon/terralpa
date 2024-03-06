<?php 
class UsuariosModel extends DB
{
  public function __construct()
  {
    parent::__construct();
    
  }
  public static function search_Usuario($id)
  {
    $sql = "SELECT * FROM usuarios WHERE id_usuario= :id_usuario LIMIT 1";
    return ($rows = parent::query($sql, ['id_usuario' => $id])) ? $rows[0] : [];
    
  } 
}