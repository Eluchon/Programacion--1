<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
include("./Conection.php");
$sql = 'select * from persona';
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
$params= array('nombre' => $nombre,'apellido' => $apellido,'documento'=> $dni ,'edad'=> $edad);
$sql = "INSERT INTO persona (nombre,apellido,documento,edad) VALUES (:nombre,:apellido,:documento,:edad)";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
echo "</pre>";
header('Location: Ejercicio3a.php');
exit;
?>