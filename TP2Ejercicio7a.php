<form action="TP2Ejercicio7b.php" method="get">
    <?php
    for($i = 0; $i < $_GET["numero"]; $i++) {
        echo "Textbox nro ".$i." "."<input type='number' name='numero".$i."'></input>";
        echo "<br>";
    }
    ?>
    <input type="submit">
</form>
