<table style="border: black; border-style: solid">
    <?php

    $cantidad =  count($_GET);
    $div=ceil($cantidad/2);
    for($i = 0; $i < $div; $i++) {
        echo "<tr>";
        for($e = 0; $e < $div; $e++) {
            $posicion = $e + $div*$i;
            if(isset($_GET["numero".$posicion]))
                echo "<td>".$_GET["numero".$posicion]."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
