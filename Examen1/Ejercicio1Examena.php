<form action="Ejercicio1Examenb.php" method="get">
    <?php
    if($_GET["numero"]>5 ) {
        for ($i = 0; $i < $_GET["numero"]; $i++) {
            echo "Textbox nro " . $i . " " . "<input type='number' name='numero" . $i . "'></input>";
            echo "<br>";
        }
    }else
        for ($i = 0; $i < 5; $i++) {
        echo "Textbox nro " . $i . " " . "<input type='number' name='numero" . $i . "'></input>";
        echo "<br>";
    }
    ?>
    <input type="submit">
</form>
