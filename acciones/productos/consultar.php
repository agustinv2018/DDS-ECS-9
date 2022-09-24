<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/consultarResponse.php';

$id = $_GET['id'];
$resp = new ConsultarResponse();
$resp->Producto = Producto::Buscar($id);

echo json_encode($resp);