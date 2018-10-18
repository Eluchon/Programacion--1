<?php
session_start();
include("./Conection.php");

$params= array('usuario'=>$_POST['usuario'],'clave' => $_POST['password']);
$sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
$count = $ejecucionSQL->rowCount();
$all= $ejecucionSQL->fetch(PDO::FETCH_ASSOC);


if($count > 0  and $all["habilitado"]==1){
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["login"] = 1;
    $_SESSION["rol"]=$all["rol"] ;

   if($all["rol"]=="admin"){
       header('Location: admin.php');
       exit;
   }elseif ($all["rol"]=="usuario"){
       header('Location: usuario.php');
       exit;
   }else
       header('Location: Ejercicio7.html');
       exit;

}
else{
    header('Location: Ejercicio7.html');
    exit;
}

?>