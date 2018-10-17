<html>

<head>
    <title>TP1 Ejercicio 8</title>
</head>
<body>
<?php


echo "Ejercicio 8) <br>";

$a = 0;
$b = 0;
$cont = 0;
echo "<table>";
for ($a = 0; $a < 5; $a++) {
    echo "<tr>";
    for ($b = 0; $b < 5; $b++) {
        echo "<td> $cont";
        $cont++;
    }
}
echo "</table>";
?>
<br>
</body>
</html>