<?php
include ("Connection.php");
session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
    ?>
<form action="agregarusu.php" method="POST" enctype="multipart/form-data">
    <div> Usuario </div><br><input type="text" name="nusuario"><br><br>
    <div> Password </div><br><input type="password" name="npassword"><br><br>
    <input type="submit" name="enviar">
    <input type="submit" name="volver" value="Volver">
</form>
<?php
if(!empty($_POST["enviar"]) && !empty($_POST["nusuario"]) && !empty($_POST["npassword"])){
$usuario=$_POST["nusuario"];
$clave=$_POST["npassword"];
$params = array('usuario' => $usuario, 'clave' => $clave);
$sql = "INSERT INTO usuario (usuario,clave) VALUES (:usuario,:clave)";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL->execute($params);
header('Location: admusu.php');
}
if (!empty($_POST["volver"])){
    header('Location: admusu.php');
}
?>