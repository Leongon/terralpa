<?php
class LoginModel extends DB
{
  public function __construct()
  {
    parent::__construct();
  } 

  public static function login(string $email, string $pass)
  {
    $sql = "SELECT * FROM usuarios WHERE id_usuario= :email AND password =:pass AND  is_activo = 1 LIMIT 1";
    return ($rows = parent::query($sql, ['email' => $email, 'pass' => $pass])) ? $rows[0] : [];
  }
}
