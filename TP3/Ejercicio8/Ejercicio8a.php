<?php
session_start();
if(empty($_SESSION['user'])){
    header('Location: Ejercicio8.html');
    exit;
}
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "<a href='pagina1.php'>Pagina1</a><br>";
echo "<a href='pagina2.php'>home</a><br>";
echo "<a href='pagina3.php'>Pagina3</a>";
?>