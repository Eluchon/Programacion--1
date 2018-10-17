
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
    include("./Conection.php");
    $sql = 'select * from persona';
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    echo "<pre>";
    while ($fila = $ejecucionSQL->fetch(PDO::FETCH_ASSOC)) {
      print_r($fila);
    }
    $params=array(array('nombre' => 'Luis','apellido' => 'Gonzalez','documento'=>'38476664','edad'=>'23'),
                  array('nombre' => 'Sol','apellido' => 'Perez','documento'=>'12432412','edad'=>'24'),
                  array('nombre' => 'Juan','apellido' => 'Perez','documento'=>'90423152','edad'=>'48'));
foreach ($params as $key){
    $sql = "INSERT INTO persona (nombre,apellido,documento,edad) VALUES (:nombre,:apellido,:documento,:edad)";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute($key);
}
    echo "</pre>";
    die();
     ?>
  </body>
</html>
