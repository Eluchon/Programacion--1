<html>

<head>
    <title>TP1 Ejercicio 2</title>
</head>
<body>
<?php


echo "Ejercicio 2) <br>";
?>
<br>
<?php
$semana[0]="Domingo";
$semana[1]="Lunes";
$semana[2]="Martes";
$semana[3]="Miercoles";
$semana[4]="Jueves";
$semana[5]="Viernes";
$semana[6]="Sabado";

echo "Ejercicio A: <br>";
?>
<br>
<?php

echo "Dias de la semana:<br>";
?>
<br>
<?php

print_r($semana);
?>
<br>
<br>
<?php

echo "Ejercicio B: <br>";
?>
<br>
<?php
$casa['Cocinas']=1;
$casa['Dormitorios']=3;
$casa['Salones']=1;
$casa['Baños']=2;



print_r($casa);


?>

<br>
<br>

<?php

echo "Ejercicio C: <br>";


$array3d[0][1][1]="0";
$array3d[0][1][2]="9";
$array3d[0][2][3]="10";
$array3d[0][2][4]="19";
$array3d[1][3][1]="20";
$array3d[1][3][2]="29";
echo "<pre>";
print_r($array3d);
echo "</pre>";
?>
<br>
<?php


echo "Ejercicio D: <br>";

$par2d['Base de Datos']['Dat1']="42";
$par2d['Base de Datos']['Dat2']="32";
$par2d['Servidor']['Backup1']="2342345";
$par2d['Servidor']['Backup2']="456456456";
echo "<pre>";
print_r($par2d);
echo "</pre>"
?>
</body>
</html>