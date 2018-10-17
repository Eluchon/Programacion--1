<?php
session_start();
if(empty($_SESSION['login'])){
    header('Location: Ejercicio7.html');
    exit;
}
echo "El Usuario es: ".$_SESSION['usuario'];
?>