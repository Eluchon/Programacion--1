<html>

<head>
    <title>TP1 Ejercicio 6</title>
</head>
<body>
<?php


echo "Ejercicio 6) <br>";

$array=array_fill(0,15,NULL);

for($i = 0; $i < 15; $i++) {
    $array[$i]=rand(1,50);
}

?>
<?php
echo "Contenido del array: <br> ";
?>
<br>
<?php
print_r($array);
?>
<br>
<?php
?>
<br>
<?php
echo "Ejercicio A: <br>";
?>
<br>
<?php
$array2=array_unique($array);
print_r($array2);

?>
<br>
</body>
</html>