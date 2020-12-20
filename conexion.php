<?php
    // Conexion al servidor de bases de datos mySQL
    // Variables para la conexion local

    $servidor = "localhost";
    $nombreusuariolocal = "root";
    $passwordlocal = "11235813";
    $debaselocal = "bancodesangre";

    // Variables para la conexion remota
    $nombreusuariowebhost = "id15395730_alejandrocesarcami@2a02:4780:bad:c0de::14";
    $passwordwebhost = "";
    $debasewebhost = "id15395730_bancodesangre";
    $debase = "id15395730_bancodesangre";
    // Conexion
    $conexion = @mysqli_connect($servidor, $nombreusuariolocal, $passwordlocal, $debaselocal);
    // $conexion = mysqli_connect($servidor, $nombreusuariowebhost, $passwordwebhost, $debasewebhost);
                                                                 
    // Validamos la Conexion
    if($conexion-> connect_error) {
        // Si hay algun error en la conexion, para la ejecucion del programa y muestra mensaje
        die("Conexion fallida: " . $conexion-> connect_error);
    }
    // Si la conexion fue exitosa, continua la ejecucion del programa
?>