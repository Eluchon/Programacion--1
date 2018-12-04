<?php

session_start();
if(empty($_SESSION['login'])){
    header('Location: admin.html');
    exit;
}else
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
<form action="admusu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Administracion de Usuarios" name="adm">
    <br><br>
</form>
<form action="regis.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Registros de Auditoria" name="registros" >
    <br><br>
</form>
<form action="exp.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Exportar Auditoria" name="exportar">
    <br><br>
</form>
<form action="menu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Atras" name="atr">
</form>
<form action="menu.php" method="POST" enctype="multipart/form-data">
    <input type="submit" value="Desconectar" name="desc">
</form>
</body>
</html>
