<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
session_start();
$_SESSION["texto4"] = $_POST['texto4'];
$_SESSION["texto5"] = $_POST['texto5'];
$_SESSION["texto6"] = $_POST['texto6'];
?>
<form action="Ejercicio5b.php" method="POST">
    <h4>Septimo texto</h4><br>
    <input type="text" name="texto7" required="required" pattern="[A-Za-z0-9]{1,20}"><br>
    <h4>Octavo texto</h4><br>
    <input type="text" name="texto8" required="required" pattern="[A-Za-z0-9]{1,20}"><br>
    <h4>Noveno texto</h4><br>
    <input type="text" name="texto9" required="required" pattern="[A-Za-z0-9]{1,20}"><br>

    <input type="submit">
</body>
</html>