<?php
    include_once("conexion.php");
    $fecha=$_POST["fecha"];
    $autor=$_POST["autor"];
    $titulo=$_POST["titulo"];
    $nombredealumno=$_POST["nombredealumno"];
    $fechaentrega=$_POST["fechaentrega"];
    $nombreencargado=$_POST["nombreencargado"];
    $gradugrupoturno=$_POST["gradugrupoturno"];
    $bachillerato=$_POST["bachillerato"];
    $codigobarras=$_POST["codigobarras"];
    $numeroejemplar=$_POST["numeroejemplar"];
    $codigoalumno=$_POST["codigoalumno"];
    $celularalumno=$_POST["celularalumno"];
    $correo=$_POST["correo"];

$sentencia=$base_de_datos->prepare("UPDATE registro SET fecha= :fecha, autor=:autor, titulo=:titulo, nombredealumno=:nombredealumno, fechaentrega=:fechaentrega, 
nombreencargado=:nombreencargado, gradugrupoturno=:gradugrupoturno, bachillerato=:bachillerato, codigobarras=:codigobarras, numeroejemplar=:numeroejemplar, 
codigoalumno=:codigoalumno, celularalumno=:celularalumno, correo=:correo WHERE codigoalumno=:codigoalumno;");

    $sentencia->bindParam(':fecha',$fecha);
    $sentencia->bindParam(':autor',$autor);
    $sentencia->bindParam(':titulo',$titulo);
    $sentencia->bindParam(':nombredealumno',$nombredealumno);
    $sentencia->bindParam(':fechaentrega',$fechaentrega);
    $sentencia->bindParam(':nombreencargado',$nombreencargado);
    $sentencia->bindParam(':gradugrupoturno',$gradugrupoturno);
    $sentencia->bindParam(':bachillerato',$bachillerato);
    $sentencia->bindParam(':codigobarras',$codigobarras);
    $sentencia->bindParam(':numeroejemplar',$numeroejemplar);
    $sentencia->bindParam(':codigoalumno',$codigoalumno);
    $sentencia->bindParam(':celularalumno',$celularalumno);
    $sentencia->bindParam(':correo',$correo);
   
    if($sentencia->execute()){
        return header("Location:registro.php");
    }
    else{
        return "error";
    }

?>