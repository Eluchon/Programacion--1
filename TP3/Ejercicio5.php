<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>E</title>
</head>
<body>
<?php
session_start();
$_SESSION["texto1"] = $_POST['texto1'];
$_SESSION["texto2"] = $_POST['texto2'];
$_SESSION["texto3"] = $_POST['texto3'];
?>
<form action="Ejercicio5a.php" method="POST">
    <h4>Cuarto texto</h4><br>
    <input type="text" name="texto4" required="required" pattern="[A-Za-z0-9]{1,20}"><br>
    <h4>Quinto texto</h4><br>
    <input type="text" name="texto5" required="required" pattern="[A-Za-z0-9]{1,20}"><br>
    <h4>Sexto texto</h4><br>
    <input type="text" name="texto6" required="required" pattern="[A-Za-z0-9]{1,20}"><br>

    <input type="submit">
</body>
</html>