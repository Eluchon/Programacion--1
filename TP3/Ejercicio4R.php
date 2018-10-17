<?php

if ($_FILES["arch"]["size"] == 0){
    echo "<h1>El archivo esta vacio</h1>";
}else{
    $archivo=fopen($_FILES["arch"]["tmp_name"],"r");
    copy($_FILES["arch"]["tmp_name"],"importados/". $_FILES["arch"]["name"]);
    echo "<h1>Completado con Exito</h1>";
    echo "<br>";
    echo "<h1>Galeria</h1>";
    echo "<br>";
$imagenes= array_merge(glob("importados/"."*.jpg"),glob("importados/"."*.png"));

    foreach ($imagenes as $value){
        echo "<h4>".$value."</h4><br><img src='$value.' width='120px' height='120px'><br>";
    }

    fclose($archivo);

}

