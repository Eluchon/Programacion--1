<?php
session_start();
if(empty($_SESSION['user'])){
    $archivo=fopen("fecha.txt","a+");
    fwrite($archivo, date('Y-m-d H:i:s')." ; ".basename($_SERVER['PHP_SELF'])." ; ".$_SESSION["user"]."FAIL".PHP_EOL);
    fclose($archivo);
    header('Location: Ejercicio9.html');
    exit;
}
$archivo=fopen("fecha.txt","a+");
fwrite($archivo, date('Y-m-d H:i:s')." ; ".basename($_SERVER['PHP_SELF'])." ; ".$_SESSION["user"].PHP_EOL);
fclose($archivo);
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "<a href='pagina1.php'>Pagina1</a><br>";
echo "<a href='pagina2.php'>Pagina2</a><br>";
echo "<a href='Ejercicio9.html'>Home</a>";