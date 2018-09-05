<html>
<head>
    <title>TP1 Ejercicio 9</title>
</head>
<body>
<?php
echo "Ejercicio 9) <br>";
$sumas=0;
echo "<table>";
$array_letras=array(NULL,"a","b","c","d","e");
$array_numeros=array(1,"a1","b1","c1","d1","e1");

echo "<tr>";
foreach ($array_letras as $valor) {
    echo "<td> $valor";
}
echo "</tr>";
for($sumas=0;$sumas<5;$sumas++) {
    echo "<tr>";
    foreach ($array_numeros as $valor) {
        $conta=0;
        $sumin = $valor;

        switch ($sumas) {
            case 0:
                break;
            case 1:
                $sumin++;
                break;
            case 2:

               while($conta<$sumas){
                $sumin++;
                $conta++;
               }
                break;
            case 3:
                while($conta<$sumas){
                    $sumin++;
                    $conta++;
                }
                break;
            case 4:
                while($conta<$sumas){
                    $sumin++;
                    $conta++;
                }
                break;
        }
        echo "<td> $sumin";
    }
    echo "</tr>";
}
?>
<br>
</body>
</html>