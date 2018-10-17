<?php
session_start();
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "Password: ".$_SESSION["pass"]."<br>";
echo "<a href='pagina1.php'>Pagina1</a><br>";
echo "<a href='pagina2.php'>Pagina2</a><br>";
echo "<a href='pagina3.php'>Pagina3</a>";
?>