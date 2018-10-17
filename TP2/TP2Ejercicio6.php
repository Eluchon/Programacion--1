

    <?php
    if (empty($_GET['filas'])) {
        echo "No se escribio nada";
    }else
        echo "Filas: ".$_GET['filas'];
    ?>
    <br>

    <?php
    if (empty($_GET['columnas'])) {
        echo "No se escribio nada";
    }else
        echo "Columnas: ".$_GET['columnas'];

    ?>
    <br>

    <table style="border: black; border-style: solid">

<?php

$var = 0;
for($i = 0; $i < $_GET["filas"]; $i++) {
    echo "<tr>";
    for($e = 0; $e < $_GET["columnas"]; $e++) {
        $var = $e+3*$i;
        echo "<td> $var </td>";
    }
    echo "</tr>";
}
?>
    </table>
