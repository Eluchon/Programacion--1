<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "proyectoprogramacion1";
try{
  $conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave);
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>