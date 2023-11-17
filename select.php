<?php
include_once 'conexion.php';
class CRUDS
{
    public static function seleccionar($bodega, $tipo)
    {
        if ($tipo == 'bodega') {
            $SQL_Select = "SELECT * FROM producto WHERE  codigoBod = (SELECT id_bod FROM bodega WHERE nombre = '$bodega')";
        } else {
            $SQL_Select = "SELECT * FROM producto WHERE  codigo = '$bodega'";
        }
        $objeto = new Conexion();
        $conn = $objeto->conectar();
        $respuesta = $conn->prepare($SQL_Select);
        $respuesta->execute();
        $datos = $respuesta->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($datos);
    }
}
?>