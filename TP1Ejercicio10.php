<html>

<head>
    <title>TP1 Ejercicio 10</title>

</head>
<body>
<?php


echo "Ejercicio 10) <br>";

$string="1,2,3,4;5,6,7,8;9,10,11,12;13,14,15,16;17,18,19,20;21,22,23,24;25,26,27,28";
?>
<br>
<?php
$array=explode(";",$string);
$string2=implode(",",$array);
$array2=explode(",",$string2);
print_r($array2);
?>
<br>
<br>
<?php
$conta=count($array2);
$div=ceil($conta/2);

$array3=array_chunk($array2,$div);
print_r($array3);
?>
<br>
<br>
<?php
echo "<table>";

$keys = array_keys($array3);
for($i = 0; $i < count($array3); $i++) {
    echo "<tr>";;
    foreach($array3[$keys[$i]] as $key => $value) {
        echo "<td> $value</td>";
    }
    echo "<br>";
}
?>
<br>
</body>
</html>