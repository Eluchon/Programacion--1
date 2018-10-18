<?php
session_start();
echo "Zona Admin";
echo "<br>";
if(empty($_SESSION['login'])|| $_SESSION['rol'] != "admin"){
    header('Location: Ejercicio7.html');
    exit;
}else
echo "El Admin es: ".$_SESSION['usuario'];
?>