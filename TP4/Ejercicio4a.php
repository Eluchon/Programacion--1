<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
</head>
<body>
<?php
include("./Conection.php");
$sql = 'select * from persona';
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute();
echo "<table cellspacing='2' cellpadding='2' border='1' bgcolor=FBEFEF" ;
while ($fila = $ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($fila as $campo) {
        echo "  <td>$campo</td>";
    }
    echo "<td><a href='Ejercicio4b.php?id=".$fila['id']."'>Eliminar</a></td>";
    echo "<br>";
    echo "</tr>";
}
echo "<a href='Ejercicio4.html' align='center'>Ingresar datos</a>";
?>

</body>
</html>