<?php
include_once 'conexion.php';
class CRUDU{
    public static function actualizar($producto,$bodega,$cantidad){
        $SQL_update = "UPDATE producto SET cantidad = $cantidad WHERE codigo = '$producto' AND codigoBod = '$bodega'";
        $obj = new Conexion();
        $conn = $obj ->conectar();
        $respuesta = $conn -> prepare($SQL_update);
        $respuesta -> execute();
        echo json_encode($respuesta);
    }
}
?>