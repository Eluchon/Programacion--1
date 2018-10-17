<?php
if ($_FILES["arch"]["size"] == 0){
    echo "<h1>El archivo esta vacio</h1>";
}else{
   echo "<table style='border: black; border-style: solid'>";
    $archivo=fopen($_FILES["arch"]["tmp_name"],"r");
    $filas=0;
    while (!feof($archivo) && $filas < 100) {
        $filas += 1;
        $data = fgets($archivo);
        echo "<tr><td>" . str_replace(';', '</td><td>', $data) . '</td></tr>';
    }
    echo '</table>';

    fclose($archivo);
}

