
<?php
if (isset($_GET["checkcorto"])){
    if ($_GET["checkcorto"] == "on") {
        $array = array(NULL, "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        for ($a = 1; $a < 13; $a++) {
            if ($_GET['mes'] == $array[$a]) {
                $mes = $a;
            }
        }

        for ($b = 1900; $b < 2101; $b++) {
            if ($_GET['ano'] == $b) {
                $ano = substr($b, -2);
            }
        }
        echo "Hoy es " . $_GET['dia'] . "/" . $mes . "/" . $ano;
        echo " <br>";
        echo " <br>";
//AcA FORMATO CORTO
//DIA
        echo "Dia: " . "<select name='dia'>";
        for ($c = 1; $c < 32; $c++) {
            if ($c == $_GET['dia']) {
                echo "<option selected='true' value=" . $c . ">" . $c . "</option>";
            } else
                echo "<option value=" . $a . ">" . $a . "</option>";
        }
        echo "</select>";
        echo " <br>";
        echo " <br>";
        //MES

        echo "Mes: " . "<select name='mes'>";
        $array2 = array(NULL, "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        for ($d = 1; $d < 13; $d++) {
            if ($d == $mes) {
                echo "<option selected>" . $d . "</option>";
            } else {
                echo "<option>" . $d . "</option>";
            }
        }
        echo " </select>";
        echo " <br>";
        echo " <br>";
//AÑO

        echo "Año: " . "<select name='ano'>";
        for ($e = 1900; $e < 2101; $e++) {
            if ($e == $ano) {
                echo "<option selected='true' value=" . $e . ">" . $ano . "</option>";
            } else
                echo "<option value=" . $e . ">" . $ano . "</option>";
        }
        echo " </select>";
        echo " <br>";
        echo " <br>";

    }
    }

    else

    if (!isset($_GET["checkcorto"])) {
        //ACA FORMATO LARGO
        echo "Hoy es " . $_GET['dia'] . " de " . $_GET['mes'] . " de " . $_GET['ano'];
        echo " <br>";
        echo " <br>";
//DIA
        echo "Dia: " . "<select name='dia'>";
        for ($f = 1; $f < 32; $f++) {
            if ($f == $_GET['dia']) {
                echo "<option selected='true' value=" . $f . ">" . $f . "</option>";
            } else
                echo "<option value=" . $f . ">" . $f . "</option>";
        }

        echo "</select>";
        echo " <br>";
        echo " <br>";
//MES

        echo "Mes: " . "<select name='mes'>";
        $array3 = array(NULL, "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        for ($g = 1; $g < 13; $g++) {
            if ($array3[$g] == $_GET["mes"]) {
                echo "<option selected>" . $array3[$g] . "</option>";
            } else {
                echo "<option>" . $array3[$g] . "</option>";
            }
        }
        echo " </select>";
        echo " <br>";
        echo " <br>";
//AÑO

        echo "Año: " . "<select name='ano'>";
        for ($h = 1900; $h < 2101; $h++) {
            if ($h == $_GET["ano"]) {
                echo "<option selected='true' value=" . $h . ">" . $h . "</option>";
            } else
                echo "<option value=" . $h . ">" . $h . "</option>";
        }
        echo " </select>";

}
?>



