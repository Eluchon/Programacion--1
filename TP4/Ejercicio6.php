<?php
include("./Conection.php");
$sql = "select	Nombre,	Apellido	as	Apellido,concat(apellido,' ',nombre)	as	NombreCompleto	from	persona";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
while ($fila = $ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($fila as $x => $x_value) {
        echo "$x   ";
        echo "<td><input type='text' name='$x' value='$x_value' readonly></td>";
    }
    echo "<br>";
    echo "</tr>";
}
?>