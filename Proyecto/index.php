<?php
header('Content-Type: text/html; charset=utf-8');
//incluir el archivo principal
include("Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion
$app = new \Slim\Slim();

//routing


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
        $sql = "SELECT * FROM vehiculo WHERE vehiculo_id = :id ";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute(array("id" => $id));
        $vehiculos = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);
        echo json_encode($vehiculos);

    }
    );
    $app->post(
        '/crear', function () use ($app) {
        //almaceno el ID
        include("./Connection.php");
        $vehiculos = json_decode(file_get_contents('php://input'), true);
        $patente=$vehiculos["patente"];
        $anho_patente=$vehiculos["anho_patente"];
        $anho_fabricacion=$vehiculos["anho_fabricacion"];
        $marca=$vehiculos["marca"];
        $modelo=$vehiculos["modelo"];
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $created=date('Y-m-d H:i:s');

        $params= array('patente' => $patente,'anho_patente' => $anho_patente,'anho_fabricacion' => $anho_fabricacion,'marca' => $marca ,'modelo' => $modelo,'created' => $created );
        $sql = "INSERT INTO vehiculo (patente,anho_patente,anho_fabricacion,marca,modelo,created) VALUES (:patente,:anho_patente,:anho_fabricacion,:marca,:modelo,:created)";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute($params);


    });
    $app->put(
        '/actualizar/:nombre', function ($nombre) use ($app) {
        //almaceno el ID
        $vehiculo_id = $nombre;
        include("./Connection.php");
        $vehiculos = json_decode(file_get_contents('php://input'), true);
        $patente=$vehiculos["patente"];
        $anho_patente=$vehiculos["anho_patente"];
        $anho_fabricacion=$vehiculos["anho_fabricacion"];
        $marca=$vehiculos["marca"];
        $modelo=$vehiculos["modelo"];
        $params= array('vehiculo_id' => $vehiculo_id,'patente' => $patente,'anho_patente' => $anho_patente,'anho_fabricacion' => $anho_fabricacion,'marca' => $marca ,'modelo' => $modelo );
        $sql = "UPDATE vehiculo SET patente = :patente, anho_patente= :anho_patente ,anho_fabricacion= :anho_fabricacion, marca= :marca , modelo= :modelo  WHERE `vehiculo_id` = :vehiculo_id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);
       // print_r($params);


    });
    $app->delete(
        '/eliminar/:nombre', function ($nombre) use ($app) {
        //almaceno el ID
        $id = $nombre;
        include("./Connection.php");
        $sql2 = " SET NAMES utf8 ";
        $ejecucionSQL2 = $conexion->prepare($sql2);
        $ejecucionSQL2->execute();
        $params= array('id' => $id);
        $sql = "DELETE FROM vehiculo  WHERE `vehiculo_id` = :id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);
    });
});
$app->group('/transportes', function () use ($app) {
    $app->get(
        '/', function () use ($app) {
        include("./Connection.php");
        $sql2 = " SET NAMES utf8 ";
        $ejecucionSQL2 = $conexion->prepare($sql2);
        $ejecucionSQL2->execute();
        $sql = "SELECT * FROM sistema_transporte ";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute();
        $transporte = $ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($transporte);

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
        $sql = "SELECT * FROM sistema_transporte WHERE sistema_id = :id ";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute(array("id" => $id));
        $transportes = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);
        echo json_encode($transportes);
    });
    $app->post(
        '/crear', function () use ($app) {
        //almaceno el ID
        include("./Connection.php");
        $transportes = json_decode(file_get_contents('php://input'), true);
        $nombre=$transportes["nombre"];
        $pais_procedencia=$transportes["pais_procedencia"];
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $created=date('Y-m-d H:i:s');
        $params= array('nombre' => $nombre,'pais_procedencia' => $pais_procedencia,'pais_procedencia' => $pais_procedencia,'created' => $created );
        $sql = "INSERT INTO sistema_transporte (nombre,pais_procedencia,created) VALUES (:nombre,:pais_procedencia,:created)";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL->execute($params);


    });
    $app->put(
        '/actualizar/:nombre', function ($nombre) use ($app) {
        //almaceno el ID
        $sistema_id = $nombre;
        include("./Connection.php");
        $transportes = json_decode(file_get_contents('php://input'), true);
        $nombre=$transportes["nombre"];
        $pais_procedencia=$transportes["pais_procedencia"];
        $params= array('sistema_id' => $sistema_id,'nombre' => $nombre, 'pais_procedencia' => $pais_procedencia  );
        $sql = "UPDATE sistema_transporte SET nombre = :nombre,pais_procedencia= :pais_procedencia   WHERE `sistema_id` = :sistema_id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);
        // print_r($params);


    });
    $app->delete(
        '/eliminar/:nombre', function ($nombre) use ($app) {
        //almaceno el ID
        $id = $nombre;
        include("./Connection.php");
        $sql2 = " SET NAMES utf8 ";
        $ejecucionSQL2 = $conexion->prepare($sql2);
        $ejecucionSQL2->execute();
        $params= array('id' => $id);
        $sql = "DELETE FROM sistema_transporte  WHERE `sistema_id` = :id";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);
    });
});
$app->group('/choferes', function () use ($app) {

});
    $app->get(
    '/', function () use ($app) {
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2->execute();
    $sql = "SELECT * FROM sistema_transporte ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL->execute();
    $transporte = $ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($transporte);

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
    $sql = "SELECT * FROM sistema_transporte WHERE sistema_id = :id ";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL->execute(array("id" => $id));
    $transportes = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);
    echo json_encode($transportes);
});
    $app->post(
    '/crear', function () use ($app) {
    //almaceno el ID
    include("./Connection.php");
    $transportes = json_decode(file_get_contents('php://input'), true);
    $nombre=$transportes["nombre"];
    $pais_procedencia=$transportes["pais_procedencia"];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $created=date('Y-m-d H:i:s');
    $params= array('nombre' => $nombre,'pais_procedencia' => $pais_procedencia,'pais_procedencia' => $pais_procedencia,'created' => $created );
    $sql = "INSERT INTO sistema_transporte (nombre,pais_procedencia,created) VALUES (:nombre,:pais_procedencia,:created)";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL->execute($params);


});
    $app->put(
    '/actualizar/:nombre', function ($nombre) use ($app) {
    //almaceno el ID
    $sistema_id = $nombre;
    include("./Connection.php");
    $transportes = json_decode(file_get_contents('php://input'), true);
    $nombre=$transportes["nombre"];
    $pais_procedencia=$transportes["pais_procedencia"];
    $params= array('sistema_id' => $sistema_id,'nombre' => $nombre, 'pais_procedencia' => $pais_procedencia  );
    $sql = "UPDATE sistema_transporte SET nombre = :nombre,pais_procedencia= :pais_procedencia   WHERE `sistema_id` = :sistema_id";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute($params);
    // print_r($params);


});
    $app->delete(
    '/eliminar/:nombre', function ($nombre) use ($app) {
    //almaceno el ID
    $id = $nombre;
    include("./Connection.php");
    $sql2 = " SET NAMES utf8 ";
    $ejecucionSQL2 = $conexion->prepare($sql2);
    $ejecucionSQL2->execute();
    $params= array('id' => $id);
    $sql = "DELETE FROM sistema_transporte  WHERE `sistema_id` = :id";
    $ejecucionSQL = $conexion->prepare($sql);
    $ejecucionSQL ->execute($params);
});
//inicializamos la aplicacion(API)
$app->run();


