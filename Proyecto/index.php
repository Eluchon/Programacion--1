<?php
header('Content-Type: text/html; charset=utf-8');
//incluir el archivo principal
include("Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion
$app = new \Slim\Slim();

//routing
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."

$app->group('/vehiculos', function () use ($app) {
    $app->get(
        '/', function () use ($app) {
        include("./Connection.php");
        $sql2 = " SET NAMES utf8 ";
        $ejecucionSQL2 = $conexion->prepare($sql2);
        $ejecucionSQL2->execute();
        $sql = "SELECT * FROM vehiculo ";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute();

        $vehiculos = $ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
        //json
        //print_r($vehiculos);

        echo json_encode($vehiculos);
    }
    );
    $app->get(
        '/:nombre', function ($nombre) use ($app) {
        //almaceno el ID
        $id = $nombre;
        include("./Connection.php");
        $sql2 = " SET NAMES utf8 ";
        $ejecucionSQL2 = $conexion->prepare($sql2);
        $ejecucionSQL2->execute();
        $sql = "SELECT * FROM vehiculo WHERE id = :id ";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute(array("id" => $id));
        $vehiculos = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);
        //json
        // print_r($vehiculos);

        echo json_encode($vehiculos);

    }
    );
    $app->post(
        '/crear', function () use ($app) {
        //almaceno el ID
        $vehiculos = json_decode(file_get_contents('php://input'), true);

        $marca=$vehiculos["marca"];
        $modelo=$vehiculos["modelo"];
        $ano=$vehiculos["año"];
        $patente=$vehiculos["patente"];

        include("./Connection.php");

         $sql = 'select * from vehiculo';
         $ejecucionSQL = $conexion->prepare($sql);
         $ejecucionSQL ->execute();
         $params= array('marca' => $marca,'modelo'=> $modelo ,'año'=> $ano,'patente'=> $patente);
         $sql = "INSERT INTO vehiculo (marca,modelo,año,patente) VALUES (:marca,:modelo,:año,:patente)";
         $ejecucionSQL = $conexion->prepare($sql);
         $ejecucionSQL ->execute($params);

        //json
       // print_r($vehiculos);



    });
});
$app->group('/transportes', function () use ($app) {
   $app->get(
    '/',function() use ($app){
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2 ->execute();
    $sql = "SELECT * FROM transporte ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    $transporte=$ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    //json
     //print_r($transporte);
   echo json_encode($transporte);

}
);
   $app->get(
    '/:nombre',function($nombre) use ($app){
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2 ->execute();
    $sql = "SELECT * FROM transporte WHERE id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute(array("id"=>$id));
    $transporte=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    //json
     //print_r($transporte);
    echo json_encode($transporte);

}
);
});

$app->group('/choferes', function () use ($app) {
   $app->get(
    '/',function() use ($app){
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2 ->execute();
    $sql = "SELECT * FROM chofer ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    $chofer=$ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    //json
       // print_r($chofer);
       echo json_encode($chofer);

}
);
   $app->get(
    '/:nombre',function($nombre) use ($app){
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2 ->execute();
    $sql = "SELECT * FROM chofer WHERE id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute(array("id"=>$id));
    $chofer=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    //json
    //print_r($chofer);
    echo json_encode($chofer);
}
);
});

//inicializamos la aplicacion(API)
$app->run();


