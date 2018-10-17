<?php
session_start();
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "Password: ".$_SESSION["pass"]."<br>";
?>