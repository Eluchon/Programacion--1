<?php
include ("Connection.php");
session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
    if (!empty($_POST["volver"])){
        header('Location: menu.php');
    }
if(empty($_POST["enviar"])) {
        ?>
        <h1>Registros de Auditoria</h1>
        <br>
        <form method='POST' action="exp.php">
            Desde <input type='date' name='desde'>
            <br>
            Hasta <input type='date' name='hasta'>
            <br>
            <input type="submit" name="volver" value="Volver">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
    }
    if(!empty($_POST["enviar"])) {
        $file = fopen("auditoria.txt", "c+");
        $auditoria = "";
        $sql = "SELECT * FROM auditoria WHERE fecha_acceso BETWEEN '".$_POST["desde"]." 00:00:00"."' AND '".$_POST["hasta"]." 23:59:59"."';";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute();
        $res = $ejecucionSQL->fetchAll();
        foreach ($res as $rs) {
            $auditoria = $auditoria.$rs["auditoria_id"].",".$rs["fecha_acceso"].",".$rs["usuario"].",".$rs["response_time"].",".$rs["endpoint"]."\r\n";
        }
        file_put_contents("auditoria.txt", $auditoria);
        header ("Content-Disposition: attachment; filename=auditoria.txt");
        header ("Content-Type: application/octet-stream");
        readfile("auditoria.txt");
    }

?>