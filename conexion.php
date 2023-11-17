<?php
class conexion
{
    public static function conectar()
    {
        $host = "localhost";
        $user = "root";
        $bd_name = "practica";
        $psw = "";
        try{
            return new PDO("mysql:host=".$host.";dbname=".$bd_name, $user, $psw);
        }catch(PDOException $e){
            echo "Error";
        }
    }
}
?>