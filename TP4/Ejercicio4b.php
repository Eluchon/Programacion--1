<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
</head>
<body>
<?php
$id = $_GET['id'];
include("./Conection.php");
$params= array('id' => $id);
$sql = "DELETE FROM persona  WHERE `id` = :id";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
header('Location:Ejercicio4a.php');
exit;
?>