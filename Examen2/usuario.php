<?php
session_start();
echo "Zona Usuario";
echo "<br>";
if(empty($_SESSION['login'])|| $_SESSION['rol'] != "usuario") {
    header('Location: Ejercicio7.html');
    exit;
}else
echo "El Usuario es: ".$_SESSION['usuario'];
?>