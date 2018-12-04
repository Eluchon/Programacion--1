<?php
session_start();
include("./Connection.php");
$params= array('usuario'=>$_POST['usuario'],'clave' => $_POST['password']);
$sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
$count = $ejecucionSQL->rowCount();
if($count > 0){
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["login"] = 1;
    header('Location: menu.php');
    exit;
}
else{
    header('Location: admin.html');
    exit;
}
?>

