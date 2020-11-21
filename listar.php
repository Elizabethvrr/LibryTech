<?php
include_once("conexion.php");

    $sentencia=$base_de_datos->query("SELECT * FROM registro;");
    $registro=$sentencia->fetchALL(PDO::FETCH_OBJ);
    //print_r($registro);


?>