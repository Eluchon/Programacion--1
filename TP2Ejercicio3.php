
    textbox1:
    <?php
    if (empty($_GET['texto1'])) {
        echo "No se escribio nada";
    }else
        echo $_GET['texto1'];
    ?>
    <br>
    textbox2:
    <?php
    if (empty($_GET['texto1'])) {
        echo "No se escribio nada";
    }else
        echo $_GET['texto2'];

    ?>
    <br>
    hidden:
    <?php
    if (empty($_GET['oculto'])) {
        echo "No se escribio nada";
    }else
        echo $_GET['oculto'];

    ?>
    <br>
    password:
    <?php
    if (empty($_GET['clave'])) {
        echo "No se escribio nada";
    }else
        echo $_GET['clave'];
    ?>
    <br>
<?php
if(isset($_GET['check1'])== "on") {
    //echo "checkbox1:" .$_GET['check1']."<br>";
    echo "Checkbox1: Seleccionado <br>";
}else
    echo "Checkbox1: No seleccionado <br>";
if(isset($_GET['check2'])== "on") {
    echo "Checkbox2: Seleccionado <br>";
}else
    echo "Checkbox2: No seleccionado <br>";
if(isset($_GET['check3'])== "on") {
    echo "Checkbox3: Seleccionado <br>";
}else
    echo "Checkbox3: No seleccionado <br>";
?>
    radio grupo 1:
    <?php
    if (empty($_GET['radio1'])) {
        echo "No se selecciono nada";
    }else
        echo $_GET['radio1'];
    ?>
    <br>
    radio grupo 2:
    <?php
    if (empty($_GET['radio2'])) {
        echo "No se selecciono nada";
    }else
        echo $_GET['radio2'];
    ?>
    <br>
    lista:
    <?php
    if (empty($_GET['lista'])) {
        echo "No se selecciono nada";
    }else
        echo $_GET['lista'];

    ?>