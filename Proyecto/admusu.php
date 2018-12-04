<?php
include ("Connection.php");
session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
?>
<form action="agregarusu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Agregar Usuario" name="agregar">
    <br><br>
</form>
    <form action="elimusu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Eliminar Usuario" name="eliminar">
    <br><br>
    </form>
    <form action="actusu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Actualizar Usuario" name="actualizar">
    <br><br>
</form>
    <form action="admusu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" name="volver" value="Volver">
    </form>
    <?php
if (!empty($_POST["volver"])){
    header('Location: menu.php');
}

$sql = 'select * from usuario';
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
echo "<table cellspacing='2' cellpadding='2' border='1' bgcolor=FBEFEF" ;
    ?>
   <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Token</th>
    </tr>
<?php
while ($fila = $ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";

    foreach ($fila as $campo) {
        echo "  <td>$campo</td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
?>