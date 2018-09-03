<html>
<body>
<head>
    <title>TP1 Ejercicio 4</title>
</head>

<?php


echo "Ejercicio 4) <br>";
?>
<br>
<?php

echo "Ejercicio A: <br>";
?>
<br>
<?php
$string="2,4,6,8,10";

echo "Contenido del string es = $string <br>";

$array=explode(",",$string);

echo "El contenido del array es:<br>";

foreach($array as $valor){
    echo "$valor <br>";
}

?>
<br>
<?php

echo "Ejercicio B: <br>";
?>
<br>
<?php
$numeros[0]=3;
$numeros[1]=7;
$numeros[2]=10;
$numeros[3]=17;

echo "El array de numeros esta formado por:<br>";
foreach($numeros as $valor){
    echo "$valor <br>";
}

$string2=implode(",",$numeros);

echo "El contenido del string es: $string2";

?>

</body>
</html>