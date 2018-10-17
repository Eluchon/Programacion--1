
<html>

<head>
    <title>TP2 Ejercicio 8</title>
</head>
<body>
<?php
    if(isset($_GET["texto1"])){
    echo "Texto: <input type='text' name='texto1' value='".$_GET["texto1"]."'>";
    }else
        echo "Texto: <input type='text' name='texto1'>";
?>
    <br>
    <?php
    if(isset($_GET["texto2"])){
        echo "Texto: <input type='text' name='texto2' value='".$_GET["texto2"]."'>";
    }else
        echo "Texto: <input type='text' name='texto2'>";
    ?>
    <br>
    <input type="hidden" name="oculto" value="estoy escondido">
    <br>
    <?php
    if(isset($_GET["clave"])){
        echo "Password: <input type='password' name='clave' value='".$_GET["texto1"]."'>";;
    }else
        echo "Password: <input type='password' name='clave'>";
    ?>
    <br>
    <input type="checkbox" name="check1">
    <br>
    <input type="checkbox" name="check2">
    <br>
    <input type="checkbox" name="check3">
    <br>
    <fieldset name="grupo1">
        <input type="radio" name="radio1" value="1">
        <input type="radio" name="radio1" value="2">
        <input type="radio" name="radio1" value="3">
    </fieldset>
    <br>
    <fieldset name="grupo2">
        <input type="radio" name="radio2" value="1">
        <input type="radio" name="radio2" value="2">
        <input type="radio" name="radio2" value="3">
    </fieldset>
    <br>
    <select name="lista">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit">
</form>
</body>
</html>