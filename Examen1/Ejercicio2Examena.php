<html>
<body>
<form action="Ejercicio2Examenb.php" method="get">
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

$array=array(NULL,"Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
for($b = 1; $b < 13; $b++) {
    if($b == date("n")) {
        echo "<option selected>".$array[$b]."</option>";
    }
    else {
        echo "<option>".$array[$b]."</option>";
    }
}
        echo " </select>";
        ?>

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
   Formato corto: <input type="checkbox" name="checkcorto">

    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
