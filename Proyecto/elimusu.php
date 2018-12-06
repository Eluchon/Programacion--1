<?php
include ("Connection.php");
session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
    ?>
    <h1>Eliminar Usuario</h1>
    <br>
    <form action="elimusu.php" method="POST" enctype="multipart/form-data">
        <div> ID del usuario </div><br><input type="text" name="id"><br><br>
        <input type="submit" name="enviar">
        <input type="submit" name="volver" value="Volver">
    </form>
    <?php
if(!empty($_POST["enviar"])){
    $user_id=$_POST["id"];
    $params = array('user_id' => $user_id);
    $sql = "DELETE FROM usuario  WHERE `user_id` = :user_id";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL->execute($params);
    header('Location: admusu.php');
}
if (!empty($_POST["volver"])){
    header('Location: admusu.php');
}
?>