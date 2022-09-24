<?php

header('Content-Type: application/json');

require_once '../../modelo/producto.php';
require_once '../../configuracion/database.php';
require_once 'responses/modificarResponse.php';

$json = file_get_contents('php://input',true);
$req = json_decode($json);

$cambioProducto = new Producto();
$cambioProducto->Id = $req->Id;
$cambioProducto->Codigo = $req->Codigo;
$cambioProducto->Nombre = $req->Nombre;
$cambioProducto->Marca = $req->Marca;
$cambioProducto->PrecioCompra = $req->PrecioCompra;
$cambioProducto->PrecioVenta = $req->PrecioVenta;
$cambioProducto->Categoria = $req->Categoria;
$cambioProducto->Modificar();

$resp = new ModificarResponse();
$resp->IsOk = true;

echo json_encode($resp);