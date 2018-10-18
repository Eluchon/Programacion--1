<?php
session_start();
echo "Zona Usuario";
echo "<br>";
if(empty($_SESSION['login'])){
    header('Location: Ejercicio7.html');
    exit;
}
echo "El Usuario es: ".$_SESSION['usuario'];
?>