<html>
<body>
<head>
    <title>TP1 Ejercicio 5</title>
</head>

<?php


echo "Ejercicio 5) <br>";
$largo_aleat=rand(5,15);
$array=array_fill(0,$largo_aleat,NULL);

for($i = 0; $i < $largo_aleat; $i++) {
    $array[$i]=rand(1,100);
}

?>
<br>
<?php

echo "Ejercicio A: <br>";
?>
<br>
<?php
$cant_elem=count($array);
echo "Cantidad de elementos: $cant_elem  <br>";

?>
<br>
<?php

echo "Ejercicio B: <br>";
?>
<br>
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
echo "Ejercicio C: <br>";
?>
<br>
<?php
$mayor=max($array);
$menor=min($array);

echo "El mayor numero es: $mayor <br>";
echo "El menor numero es: $menor <br>";
?>
<br>
<?php
echo "Ejercicio D: <br>";
?>
<br>
<?php
$suma=array_sum($array);
$prom= $suma / $cant_elem ;
echo "El promedio es $prom <br>"
?>
<br>
<?php
echo "Ejercicio E: <br>";
?>
<br>
<?php
if (in_array("20", $array)) {
    echo "El numero 20 SI esta en el array";
}
else{
    echo "El numero 20 NO esta en el array";
}
?>
</body>
</html>