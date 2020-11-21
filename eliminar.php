<?php
    include_once("conexion.php");
    $fecha=$_POST["fecha"];

$sentencia=$base_de_datos->prepare("DELETE FROM registro WHERE fecha=:fecha;");
    $sentencia->bindParam(':fecha',$fecha);
   
    if($sentencia->execute()){
        return header("Location:registro.php");
    }
    else{
        return "error";
    }

?>