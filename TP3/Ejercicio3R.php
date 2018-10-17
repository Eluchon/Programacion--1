<?php

if ($_FILES["arch"]["size"] == 0){
    echo "<h1>El archivo esta vacio</h1>";
}else{
    $archivo=fopen($_FILES["arch"]["tmp_name"],"r");
    copy($_FILES["arch"]["tmp_name"],"importados/". $_FILES["arch"]["name"]);
    $nombre=$_FILES["arch"]["name"];
    echo "<h1>Completado</h1>";
    echo "<br>";
    fclose($archivo);
    $archivo=fopen("importados/". $nombre,"r");
    while ($linea = fgets($archivo)) {
        echo $linea . "<br>";
    }
    fclose($archivo);

}

