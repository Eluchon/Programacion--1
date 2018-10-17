<?php
if ($_FILES["arch"]["size"] == 0){
    echo "<h1>El archivo esta vacio</h1>";
}else{
    $archivo=fopen($_FILES["arch"]["tmp_name"],"r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);
}

