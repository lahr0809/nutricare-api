<?php

class Conectar{

  protected $dbh;
  protected function Conexion() {
        $dsn = 'mysql:host=sql3.freesqldatabase.com;dbname=sql3722847';
        $usuario = 'sql3722847';
        $contraseña = 'iTJZEexMcg';
    
        try {
            $conexion =$this->dbh= new PDO($dsn, $usuario, $contraseña);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            return null;
        }
    }
    
public function set_name(){
    return $this->dbh->query("SET NAMES 'utf8'");
}

}

?>