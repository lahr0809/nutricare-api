<?php

class Alimentos extends Conectar{
    
public function Insert_alimento($nom_alimento){

    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="INSERT INTO alimentos(id,nombre) VALUES(NULL,?)";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$nom_alimento);
    $sql->execute();
    
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

}

public function Get_alimentos(){
    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="SELECT * FROM alimentos";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

public function Update_alimentos($id_alimento,$nom_alimento){
    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="UPDATE alimentos SET nombre=? WHERE id=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$nom_alimento);
    $sql->bindValue(2,$id_alimento);
    $sql->execute();
    
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
public function Delete_alimentos($id_alimento){
    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="DELETE FROM alimentos WHERE id=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$id_alimento);
    $sql->execute();
    
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
}
?>