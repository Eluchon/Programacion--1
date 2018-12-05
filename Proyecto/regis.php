<?php
include ("Connection.php");
session_start();
if (!empty($_POST["volver"])){
    header('Location: menu.php');

}
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else

    ?>
    <h1>Registros de Auditoria</h1>

    <?php

$sql = 'SELECT * FROM auditoria';
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
echo "<table cellspacing='2' cellpadding='2' border='1' bgcolor=FBEFEF >" ;
?>
    <tr>
        <th>Auditoria ID</th>
        <th>Fecha de acceso</th>
        <th>Usuario</th>
        <th>Tiempo de respuesta(ms)</th>
        <th>Endpoint</th>
    </tr>
<?php
while ($fila = $ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($fila as $campo) {
        echo " <td>$campo</td>";
    }

    echo "</tr>";

}
echo "</table>";
?>
<form action="regis.php" method="POST" enctype="multipart/form-data">
    <input type="submit" name="volver" value="Volver">
</form>

