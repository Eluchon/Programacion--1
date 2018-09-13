

    <?php


    $usuario1['usuario']="Luis";
    $usuario1['contrasena']="123";
    $usuario1['mail']="luis.gon@gmail.com";

    $usuario2['usuario']="Daniel";
    $usuario2['contrasena']="444";
    $usuario2['mail']="daniel.quin@gmail.com";

    $usuario3['usuario']="Fernando";
    $usuario3['contrasena']="567";
    $usuario3['mail']="fernando.villa@gmail.com";

    $lista=array($usuario1,$usuario2,$usuario3);


    $clave=array_search($_POST["usuario"],$lista);
        if (($_POST["usuario"] == ($lista[$clave]["usuario"]))and ($_POST["pass"]==($lista[$clave]["contrasena"]))) {
            echo " El usuario existe: ";
            echo " <br>";
            echo "Usuario: ".$lista[$clave]["usuario"];
            echo " <br>";
            echo "Password: ".$lista[$clave]["contrasena"];
            echo " <br>";
            echo "Mail: ".$lista[$clave]["mail"];
            echo " <br>";
            echo " <br>";
            print_r($lista[$clave]);
        } elseif(($_POST["usuario"] == ($lista[$clave]["usuario"]))and ($_POST["pass"]!=($lista[$clave]["contrasena"]))) {
            echo "Password Incorrecto";

        }else{
        echo "El usuario no existe";
    }
    ?>