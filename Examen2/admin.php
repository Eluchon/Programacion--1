<?php
session_start();
echo "Zona Admin";
echo "<br>";
if(empty($_SESSION['login'])){
    header('Location: Ejercicio7.html');
    exit;
}
echo "El Admin es: ".$_SESSION['usuario'];
?>