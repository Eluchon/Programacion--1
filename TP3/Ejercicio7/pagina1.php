<?php
session_start();
echo "Nombre de usuario: ".$_SESSION["user"]."<br>";
echo "<a href='Ejercicio7.html'>home</a><br>";
echo "<a href='pagina2.php'>Pagina2</a><br>";
echo "<a href='pagina3.php'>Pagina3</a>";