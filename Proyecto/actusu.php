<?php
include ("Connection.php");
session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
    ?>
    <h1>Actualizar Usuario</h1>
    <br>
    <form action="actusu.php" method="POST" enctype="multipart/form-data">
        <div>Id del usuario *obligatorio</div><br><input type="number" name="id"><br><br>
        <div>Cambiar nombre de usuario </div><br><input type="text" name="actusuario"><br><br>
        <div>Cambiar Contraseña </div><br><input type="password" name="actclave"><br><br>
        <input type="submit" name="enviar">
        <input type="submit" name="volver" value="Volver">
    </form>
    <?php
if(!empty($_POST["enviar"]) && !empty($_POST["id"])){
    if (!empty ($_POST["actusuario"])){
        $user_id=$_POST["id"];
        $usuario = $_POST["actusuario"];
        $params = array('user_id' => $user_id, 'usuario' => $usuario);
        $sql = "UPDATE usuario SET usuario = :usuario WHERE `user_id` = :user_id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute($params);
    }
    if (!empty ($_POST["actclave"])&& !empty($_POST["id"])){
        $user_id=$_POST["id"];
        $clave = $_POST["actclave"];
        $params = array('user_id' => $user_id, 'clave' => hash('sha256',$clave));
        $sql = "UPDATE usuario SET clave = :clave WHERE `user_id` = :user_id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute($params);

    }

    header('Location: admusu.php');

}
if (!empty($_POST["volver"])){
    header('Location: admusu.php');
}
?>