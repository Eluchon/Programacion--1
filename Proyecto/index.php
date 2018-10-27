<?php

//incluir el archivo principal
include("Slim/Slim.php");
include("./Connection.php");
//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();

//routing
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."

$app->get(
    '/vehiculos',function() use ($app){
    include("./Connection.php");
    $sql = "SELECT * FROM vehiculo ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    $vehiculos=$ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    	//json
   // print_r($vehiculos);
    echo json_encode($vehiculos);
    }
)->setParams(array($app));

$app->get(
    '/vehiculos/:nombre',function($nombre) use ($app){
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql = "SELECT * FROM vehiculo WHERE id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute(array("id"=>$id));
    $vehiculos=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    //json
    print_r($vehiculos);
   // json_encode($vehiculos);

    }
);
$app->get(
    '/transportes',function() use ($app){
    include("./Connection.php");
    $sql = "SELECT * FROM transporte ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    $transporte=$ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    //json
     print_r($transporte);
    //json_encode($transporte);

}
);

$app->get(
    '/transportes/:nombre',function($nombre) use ($app){
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql = "SELECT * FROM transporte WHERE id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute(array("id"=>$id));
    $transporte=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    //json
     print_r($transporte);
    //json_encode($transporte);

}
);
$app->get(
    '/choferes',function() use ($app){
    include("./Connection.php");
    $sql = "SELECT * FROM chofer ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute();
    $chofer=$ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    //json
        print_r($chofer);
       //     json_encode($chofer);

}
);

$app->get(
    '/choferes/:nombre',function($nombre) use ($app){
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql = "SELECT * FROM chofer WHERE id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute(array("id"=>$id));
    $chofer=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    //json
    print_r($chofer);
    //json_encode($chofer);
}
);
//inicializamos la aplicacion(API)
$app->run();

