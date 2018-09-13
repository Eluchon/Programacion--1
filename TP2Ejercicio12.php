<html>
<body>
<form action="TP2Ejercicio12b.php" method="get">
<?php
echo "Hoy es: ".date("j-F-Y");
?>
<br>
<br>
<?php
    echo "Dia: "."<select name='dia'>";
      for ($a=1;$a < 32; $a++) {
          if ($a==date(j)) {
              echo "<option selected='true' value=" . $a . ">" . $a . "</option>";
          }else
              echo "<option value=" . $a . ">" . $a . "</option>";
      }
      ?>
    </select>
    <br>
    <br>
<?php
echo "Mes: "."<select name='mes'>";
        for ($b=1;$b < 2; $b++)  { // no se porq aca si pongo 2 se soluciona todo
            $mes = $b;
            switch ($b) {
                case 1:
                    $mes = "Enero";
                    if (1==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 2:
                    $mes = "Febrero";
                    if (2==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 3:
                    $mes = "Marzo";
                    if (3==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 4:
                    $mes = "Abril";
                    if (4==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 5:
                    $mes = "Mayo";
                    if (5==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 6:
                    $mes = "Junio";
                    if (6==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 7:
                    $mes = "Julio";
                    if (7==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 8:
                    $mes = "Agosto";
                    if (8==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 9:
                    $mes = "Septiembre";
                    if (9==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 10:
                    $mes = "Octubre";
                    if (10==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 11:
                    $mes = "Noviembre";
                    if (11==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
                case 12:
                    $mes = "Diciembre";
                    if (12==date(n)) {
                        echo "<option selected='true' value=" . $mes . ">" . $mes . "</option>";
                    }else
                        echo "<option value=" . $mes . ">" . $mes . "</option>";
            }

        }
        ?>
    </select>
    <br>
    <br>
<?php
echo "Año: "."<select name='ano'>";

      for ($c=1900;$c < 2101; $c++){
          if ($c==date(Y)) {
              echo "<option selected='true' value=" . $c . ">" . $c . "</option>";
          }else
              echo "<option value=".$c.">".$c."</option>";

}

        ?>
    </select>
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
