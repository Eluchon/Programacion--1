<?php
session_start();
if(empty($_SESSION['user'])){
    header('Location: Ejercicio8.html');
    exit;
}
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "<a href='pagina1.php'>Pagina1</a><br>";
echo "<a href='pagina2.php'>Pagina2</a><br>";
echo "<a href='Ejercicio8.html'>Home</a>";