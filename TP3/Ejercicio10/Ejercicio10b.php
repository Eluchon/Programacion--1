
<?php
    $logfile = "fecha.txt";
if($logfile) {
    header ("Content-Disposition: attachment; filename=$logfile ");
    header ("Content-Type: application/force-download");
    header ("Content-Length: ".filesize($logfile));
    readfile($logfile);
} else {
    echo 'Archivo no encontrado';
}
?>