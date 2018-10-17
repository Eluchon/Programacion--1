<html>

<head>
    <title>TP1 Ejercicio 7</title>
</head>
<body>
<?php


echo "Ejercicio 7) <br>";
?>
<?php
	$a=0;
	$b=0;
	do{
        $arreglo[$a] = random_int(1,30);
        $a++;
    }while($a < 10 || $arreglo[$a-1] != 30);
?>
<br>
<?php
echo "Ejercicio A: <br>";
?>
<br>
<?php
asort($arreglo);
print_r($arreglo);
$conta=count($arreglo);
?>
<br>
<br>
<?php
echo "Cantidad de numeros generados: $conta <br>";
?>
<br>
<?php
echo "Ejercicio B: <br>";
?>
<br>
<?php
$div=ceil($conta/2);
print_r(array_chunk($arreglo,$div));
?>





