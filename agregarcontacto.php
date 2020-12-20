<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("conexion.php"); 
        // Agrega contacto en la tabla REGISTRODEMENSAJES
        $nombre_contacto = strtoupper($_POST['nombre']);
        $apellido_contacto = strtoupper($_POST['apellido']);
        $correo_contacto = $_POST['correo'];
        $institucion_contacto = strtoupper($_POST['institucion']);
        $telefono_contacto = $_POST['telefono'];
        $mensaje_contacto = $_POST['mensaje'];
        $sentencia = "INSERT INTO registrodemensajes (id, nombre, apellido, correo, institucion, telefono, mensaje)
                       VALUES (0, '$nombre_contacto', '$apellido_contacto', '$correo_contacto', '$institucion_contacto', 
                              '$telefono_contacto', '$mensaje_contacto')";
        if (!mysqli_query($conexion,$sentencia)) {
            die('Error: ' . mysqli_error($conexion));
        }
        // Lo siguiente es para probar- Borrar
        $header = 'From: ' . $correo . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() .  " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        echo $header;
        $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
        $mensaje .= "Perteneciente a la institucion" . $institucion . "\r\n";
        $mensaje .= "Su correo electronico es : " . $correo . " \r\n";
        $mensaje .= "Su número teléfonico es : " . $telefono . " \r\n";
        $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());    
        echo $mensaje;
        // Lo anterior es para probar- Borrar
        sleep(5);
        // Envia mensaje al emisor
        $destino = "yoalecami@gmail.com";
        $nombre   = $_POST["nombre"] . " " . $_POST["apellido"];
        $correo   = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $institucion = $_POST["institucion"];
        $mensaje  = $_POST["mensaje"];

        // Concateno las variable con el texto identificador y antes del texto agrego \n para que baje una linea
        $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
        echo $contenido;
        // A servicio MAIL le asigno 1ro la variable con la direccion. Puede ir directamente la direccion
        // Como segundo dato la agrego el ASUNTO entre comillas o variable si llega por el metodo POST
        // Por ultimo se agrega la variable contenido que es la concatenacion de todo lo recibido
        mail($destino,"Contacto desde la página web de la Fundación",$contenido);
        // Redireccionamos a la pagina de agradecimiento por el mensaje
        header("Location:graciasmail.html");
        header("location:banco.php");
    ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>

