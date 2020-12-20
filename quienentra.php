<?php
    $mensaje_alerta = "";
    session_start();
    if(!empty($_SESSION['activo'])){
        header('location: administracion.php');
        }else{   
            if(!empty($_POST)){
                //$_POST trae algo
                if(empty($_POST['username']) || empty($_POST['password'])){
                        //O el usuario o la clave estan vacios
                        $mensaje_alerta = "4 - Ingrese su USUARIO y CLAVE registrados";
                        }else{
                            //El usuario y la clave traen algo
                            require_once "conexion.php";
                            $usuario = $_POST['username'];
                            $claveusuario = $_POST['password'];

                            $consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombreusuario = '$usuario' AND clave = '$claveusuario'");
                            $resultado = mysqli_num_rows($consulta);
                            if($resultado>0){
                                $datosconsulta = mysqli_fetch_array($consulta);
                                $_SESSION['activo']        = true;
                                $_SESSION['idusuario']     = $datosconsulta['id'];
                                $_SESSION['nombreusuario'] = $datosconsulta['nombre'];
                                $_SESSION['correousuario'] = $datosconsulta['correo'];
                                $_SESSION['aliasusuario']  = $datosconsulta['nombreusuario'];
                                $_SESSION['nivelusuario']  = $datosconsulta['niveldeacceso'];
                                header('location: administracion.php');
                                }else{
                                    $mensaje_alerta = "El USUARIO o la CLAVE ingresados no son correctos";
                                    session_destroy();}
                                }
                        }
            }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="login-form">
                    <h1>Acceso</h1>
                    <form action="" method="post">
                        <p>usuario</p>
                        <input type="text" name="username"  required="" value="" />
                        <p>clave</p>
                        <input type="password" name="password"  required="" value="" />
                        <input type="submit" value="Acceder" id="acceso">
                        <div class="alert"><?php echo isset($mensaje_alerta) ? $mensaje_alerta : ''; ?></div>
                        <input type="button" value="Volver" id="volver">
                    </form>
                    <a href="#">Olvido su clave?</a>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div> 
    <!-- A continuacion como debe volver automaticamente -->
</body>
</html>