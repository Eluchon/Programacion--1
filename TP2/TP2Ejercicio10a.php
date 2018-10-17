<form action="TP2Ejercicio10b.php" method="get">
    <?php
    for($i = 0; $i < $_GET["numero"]; $i++) {
        echo  "<div><input type='checkbox' name='check".$i."'>"." "."<input type='number' name='num".$i."'>"." "." Producto ".$i." "."</div>";
        echo "<br>";
    }
    ?>
    <input type="submit">
</form>
