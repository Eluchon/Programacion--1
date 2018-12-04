<?php
header('Content-Type: text/html; charset=utf-8');
//parte de seguridad
include ("Connection.php");

$usuario=$_SERVER["PHP_AUTH_USER"];
$clave=$_SERVER["PHP_AUTH_PW"];

$sql = "SELECT * FROM usuario WHERE usuario = :usuario ";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL->execute(array("usuario" => $usuario));
$arrayusuario = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);

if ($usuario != $arrayusuario["usuario"] || $clave != $arrayusuario["clave"]){

    header("WWW-Aunthenticate: Basic realm=\"thetutlage\"");
    header('HTTP/1.1 401 Unauthorized');
    echo "No autorizado";
    exit;
}
include("Slim/Slim.php");
include ("token.php");
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
            $patente = $vehiculos["patente"];
            $anho_patente = $vehiculos["anho_patente"];
            $anho_fabricacion = $vehiculos["anho_fabricacion"];
            $marca = $vehiculos["marca"];
            $modelo = $vehiculos["modelo"];
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $created = date('Y-m-d H:i:s');

            $params = array('patente' => $patente, 'anho_patente' => $anho_patente, 'anho_fabricacion' => $anho_fabricacion, 'marca' => $marca, 'modelo' => $modelo, 'created' => $created);
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
            if (!empty ($vehiculos["patente"])){
                $patente = $vehiculos["patente"];
                $params = array('vehiculo_id' => $vehiculo_id, 'patente' => $patente);
                $sql = "UPDATE vehiculo SET patente = :patente WHERE `vehiculo_id` = :vehiculo_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($vehiculos["anho_patente"])){
                $anho_patente = $vehiculos["anho_patente"];
                $params = array('vehiculo_id' => $vehiculo_id, 'anho_patente' => $anho_patente);
                $sql = "UPDATE vehiculo SET anho_patente= :anho_patente WHERE `vehiculo_id` = :vehiculo_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($vehiculos["anho_fabricacion"])){
                $anho_fabricacion = $vehiculos["anho_fabricacion"];
                $params = array('vehiculo_id' => $vehiculo_id, 'anho_fabricacion' => $anho_fabricacion);
                $sql = "UPDATE vehiculo SET anho_fabricacion= :anho_fabricacion WHERE `vehiculo_id` = :vehiculo_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($vehiculos["marca"])){
                $marca = $vehiculos["marca"];
                $params = array('vehiculo_id' => $vehiculo_id, 'marca' => $marca);
                $sql = "UPDATE vehiculo SET marca= :marca WHERE `vehiculo_id` = :vehiculo_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($vehiculos["modelo"])){
                $modelo = $vehiculos["modelo"];
                $params = array('vehiculo_id' => $vehiculo_id, 'modelo' => $modelo);
                $sql = "UPDATE vehiculo SET modelo= :modelo WHERE `vehiculo_id` = :vehiculo_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
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
            $params = array('id' => $id);
            $sql = "DELETE FROM vehiculo  WHERE `vehiculo_id` = :id";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute($params);
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
            $nombre = $transportes["nombre"];
            $pais_procedencia = $transportes["pais_procedencia"];
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $created = date('Y-m-d H:i:s');
            $params = array('nombre' => $nombre, 'pais_procedencia' => $pais_procedencia, 'pais_procedencia' => $pais_procedencia, 'created' => $created);
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
            if (!empty ($transportes["nombre"])){
                $nombre = $transportes["nombre"];
                $params = array('sistema_id' => $sistema_id, 'nombre' => $nombre);
                $sql = "UPDATE sistema_transporte SET nombre = :nombre WHERE `sistema_id` = :sistema_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($transportes["pais_procedencia"])){
                $pais_procedencia = $transportes["pais_procedencia"];
                $params = array('sistema_id' => $sistema_id, 'pais_procedencia' => $pais_procedencia);
                $sql = "UPDATE sistema_transporte SET pais_procedencia= :pais_procedencia WHERE `sistema_id` = :sistema_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
        });
        $app->delete(
            '/eliminar/:nombre', function ($nombre) use ($app) {
            //almaceno el ID
            $id = $nombre;
            include("./Connection.php");
            $sql2 = " SET NAMES utf8 ";
            $ejecucionSQL2 = $conexion->prepare($sql2);
            $ejecucionSQL2->execute();
            $params = array('id' => $id);
            $sql = "DELETE FROM sistema_transporte  WHERE `sistema_id` = :id";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute($params);
        });
    });
    $app->group('/choferes', function () use ($app) {
        $app->get(
            '/', function () use ($app) {
            include("./Connection.php");
            $sql2 = " SET NAMES utf8 ";
            $ejecucionSQL2 = $conexion->prepare($sql2);
            $ejecucionSQL2->execute();
            $sql = "SELECT * FROM chofer ";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute();
            $chofer = $ejecucionSQL->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($chofer);

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
            $sql = "SELECT * FROM chofer WHERE chofer_id = :id ";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute(array("id" => $id));
            $chofer = $ejecucionSQL->fetch(PDO::FETCH_ASSOC);
            echo json_encode($chofer);
        });
        $app->post(
            '/crear', function () use ($app) {
            //almaceno el ID
            include("./Connection.php");
            $choferes = json_decode(file_get_contents('php://input'), true);
            $apellido = $choferes["apellido"];
            $nombre = $choferes["nombre"];
            $documento = $choferes["documento"];
            $email = $choferes["email"];
            $vehiculo_id = $choferes["vehiculo_id"];
            $sistema_id = $choferes["sistema_id"];
            date_default_timezone_set("America/Argentina/Buenos_Aires");
            $created = date('Y-m-d H:i:s');
            $params = array('apellido' => $apellido,'nombre' => $nombre, 'documento' => $documento, 'email' => $email,'vehiculo_id' => $vehiculo_id,'sistema_id' => $sistema_id, 'created' => $created);
            $sql = "INSERT INTO chofer (apellido,nombre,documento,email,vehiculo_id,sistema_id,created) VALUES (:apellido,:nombre,:documento,:email,:vehiculo_id,:sistema_id,:created)";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute($params);
        });
        $app->put(
            '/actualizar/:nombre', function ($nombre) use ($app) {
            //almaceno el ID
            $chofer_id = $nombre;
            include("./Connection.php");
            $choferes = json_decode(file_get_contents('php://input'), true);
            if (!empty ($choferes["apellido"])){
                $apellido = $choferes["apellido"];
                $params = array('chofer_id' => $chofer_id, 'apellido' => $apellido);
                $sql = "UPDATE chofer SET apellido = :apellido WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($choferes["nombre"])){
                $nombre = $choferes["nombre"];
                $params = array('chofer_id' => $chofer_id, 'nombre' => $nombre);
                $sql = "UPDATE chofer SET nombre = :nombre WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($choferes["documento"])){
                $documento = $choferes["documento"];
                $params = array('chofer_id' => $chofer_id, 'documento' => $documento);
                $sql = "UPDATE chofer SET documento = :documento WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($choferes["email"])){
                $email = $choferes["email"];
                $params = array('chofer_id' => $chofer_id, 'email' => $email);
                $sql = "UPDATE chofer SET email = :email WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($choferes["vehiculo_id"])){
                $vehiculo_id = $choferes["vehiculo_id"];
                $params = array('chofer_id' => $chofer_id, 'vehiculo_id' => $vehiculo_id);
                $sql = "UPDATE chofer SET vehiculo_id = :vehiculo_id WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }
            if (!empty ($choferes["sistema_id"])){
                $sistema_id = $choferes["sistema_id"];
                $params = array('chofer_id' => $chofer_id, 'sistema_id' => $sistema_id);
                $sql = "UPDATE chofer SET sistema_id = :sistema_id WHERE `chofer_id` = :chofer_id";
                $ejecucionSQL = $conexion->prepare($sql);
                $ejecucionSQL->execute($params);
            }

        });
        $app->delete(
            '/eliminar/:nombre', function ($nombre) use ($app) {
            //almaceno el ID
            $id = $nombre;
            include("./Connection.php");
            $sql2 = " SET NAMES utf8 ";
            $ejecucionSQL2 = $conexion->prepare($sql2);
            $ejecucionSQL2->execute();
            $params = array('id' => $id);
            $sql = "DELETE FROM chofer  WHERE `chofer_id` = :id";
            $ejecucionSQL = $conexion->prepare($sql);
            $ejecucionSQL->execute($params);
        });
    });
//inicializamos la aplicacion(API)
    $app->run();


