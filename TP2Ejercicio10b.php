
    <?php
    $cantidad =  count($_GET);

    for ($i=0;$i < $cantidad;$i++) {
        if (isset($_GET["check".$i])) {
            if ($_GET["check" . $i] == "on") {
                echo "El producto " . $i . " posee una cantidad de " . $_GET["num" . $i] . "<br>";
            }
        }
}
    ?>

