<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once("config/conx.php");
require_once("models/Recomendaciones.php");

$Recomendaciones = new Recomendaciones();

if (isset($_GET["Item"])) {
    $enfe = $_GET['Item'];
    switch ($enfe) {
        case (isset($enfe)):
            $datos=$Recomendaciones->get_recomendacion_name($enfe);
        echo json_encode($datos);
            break;
        default:
            $datos=$Recomendaciones->get_recomendaciones();
            echo json_encode($datos);
            break;
    }    

} else {
    echo json_encode(["error" => "Falta el parámetro 'Item' en la URL."]);
}


?>