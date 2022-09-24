<?php   
header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once 'responses/consultarTodosResponse.php';
require_once '../../configuracion/database.php';

$resp =  new ConsultarTodosResponse();
$resp->ListProductos = Producto::BuscarTodos();

echo json_encode($resp);