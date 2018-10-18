<?php
$userr = $_POST['user'];
$pass = $_POST['pass'];
$habilitado = 1;
$rol= "usuario";
include("./Conection.php");
$sql = 'select * from usuario';
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
$params= array('userr' => $userr,'pass' => $pass,'habilitado'=> $habilitado ,'rol'=> $rol);
$sql = "INSERT INTO usuario (usuario,clave,habilitado,rol) VALUES (:userr,:pass,:habilitado,:rol)";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
echo "</pre>";
header('Location: Ejercicio7.html');
exit;
?>