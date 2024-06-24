<?php

class Recomendaciones extends Conectar{
    
public function get_recomendaciones(){

    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="SELECT 
    e.nombre AS Enfermedad,
    a.nombre AS Alimento,
    r.recomendacion AS Recomendado,
    r.razon AS Razon,
    r.dieta AS Dieta
FROM 
    recomendaciones r
JOIN 
    enfermedades e ON r.enfermedad_id = e.id
JOIN 
    alimentos a ON r.alimento_id = a.id";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

}

public function get_recomendacion_name($name_enf){

    $conectar=parent::conexion();
    parent::set_name();
    
    $sql="SELECT 
    e.nombre AS Enfermedad,
    a.nombre AS Alimento,
    r.recomendacion AS Recomendado,
    r.razon AS Razon,
    r.dieta AS Dieta
FROM 
    recomendaciones r
JOIN 
    enfermedades e ON r.enfermedad_id = e.id
JOIN 
    alimentos a ON r.alimento_id = a.id
WHERE 
    e.nombre = ?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$name_enf);
    $sql->execute();
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
}
?>