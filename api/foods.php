<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once("config/conx.php");
require_once("models/Alimentos.php");

$alimento = new Alimentos();

// Decodificar el cuerpo de la solicitud JSON a un array asociativo
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case 'insert':
        $datos=$alimento->Insert_alimento($body["nombre"]);
        echo json_encode(["message" => "Datos insertados correctamente!."]);
        break;
    case 'GetAll':
        $datos=$alimento->Get_alimentos();
        echo json_encode($datos);
        break;
    case 'update':
        $datos=$alimento->Update_alimentos($body["id"],$body["nombre"]);
        echo json_encode(["message" => "Datos actualizados correctamente!."]);
        break;
    case 'delete':
            $datos=$alimento->Delete_alimentos($body["id"]);
            echo json_encode(["message" => "Datos eliminados correctamente!."]);
            break;
}
?>