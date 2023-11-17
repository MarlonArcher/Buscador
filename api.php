<?php
include_once 'select.php';
include_once 'update.php';
$metodo = $_SERVER['REQUEST_METHOD'];
switch ($metodo) {
    case 'GET':
        $bodega = $_GET['nombreBodega'];
        $tipo = $_GET['tipo'];
        CRUDS::seleccionar($bodega,$tipo);
        break;
    case 'PUT':
        parse_str(file_get_contents('php://input'),$data);
        $producto = $data["codigoProducto"];
        $bodega = $data["codigoBod"];
        $cantidad = $data["cantidad"];
        CRUDU::actualizar($producto,$bodega,$cantidad);
}
?>