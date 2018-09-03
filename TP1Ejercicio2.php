<html>
<body>
<head>
    <title>TP1 Ejercicio 2</title>
</head>

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

for($i=0;$i<7;$i++){
    echo "$semana[$i]<br>";
}
?>
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

echo "La casa posee las siguientes habitaciones: <br>";

foreach ($casa as $clave => $valor){
    echo "Cantidad de $clave : $valor <br>";
}


?>


<br>

<?php

echo "Ejercicio C: <br>";
echo 'texto<br>';
?>
<br>
<?php

echo "Ejercicio D: <br>";
echo "texto<br>";
?>
</body>
</html>