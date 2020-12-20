<?php
     $rol = '';
     $consulta = '';
     if(!empty($_POST)) {
          if($_POST['busqueda'] == "administrador"){
               $rol = " OR nivelacceso LIKE '%1%'";
          }elseif($_POST['busqueda'] == "supervisor"){
               $rol = " OR nivelacceso LIKE '%2%'";
          }elseif($_POST['busqueda'] == "operador"){
               $rol = " OR nivelacceso LIKE '%3%'";
          }elseif($_POST['busqueda'] == "medico"){
               $rol = " OR nivelacceso LIKE '%4%'";
          }elseif($_POST['busqueda'] == "tecnico"){
               $rol = " OR nivelacceso LIKE '%5%'";
          }
     }
     $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by id";
     /* $consulta = "SELECT i.id, i.razon_social, i.localidad, i.departamento, i.contacto FROM instituciones i");  */
     if(!empty($_POST)) {
          if (!empty($_POST['identificador'])) {
               $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by id";
          } elseif (!empty($_POST['nombre'])) {
               $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by nombre";
           } elseif (!empty($_POST['usuario'])) {
               $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by nombreusuario";
           } elseif (!empty($_POST['nivel'])) {
               $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by nombrenivel";
           } elseif (!empty($_POST['busqueda'])) {
               $valor = $_POST['busqueda'];
               $consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel 
                              FROM usuarios u INNER JOIN nivelacceso n 
                                ON u.niveldeacceso = n.idnivel 
                             WHERE id LIKE '%$valor%' OR 
                               nombre LIKE '%$valor%' OR 
                        nombreusuario LIKE '%$valor%' order by id";
          }
     else {$consulta = "SELECT u.id, u.nombre, u.nombreusuario, u.telefono, n.nombrenivel FROM usuarios u INNER JOIN nivelacceso n ON u.niveldeacceso = n.idnivel order by id";}} 
?>
<?php
     include "conexion.php";
?>
<!DOCTYPE html>
<html style="height: 100%;">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/listausuarios.css">
</head>
<?php
	include "incluye/scripts.php";
?>
<body style="height: 100%;">
    <div class="container" style="height: 100%; background:black;">
        <?php include "incluye/header.php"; ?>  
        <hr color="white" size=3>
        <form action="" method="post" class="form_search">
            <h1 style="margin-top:8px; color:white;">Usuarios del Sistema</h1>
            <a style="font-size: 20px; position: relative; top: -3px; left: 15px;"href="usuario_nuevo.php" class="boton-nuevo">Nuevo Usuario</a>
            <input style="font-size: 24px; position: relative; top: -3px; left: 85px;" type="text" id="quebusca" name="busqueda" value="" placeholder="Buscar";>
            <input type="submit" value="Todos"  class="boton-todos">
            <input type="submit" value="Buscar" class="boton-busca">
            <hr color="white" size=3>
            <table>
                <thead>
                    <tr>
                        <th style="width:  65px"><button                type="submit" name="identificador" value="1" class="btn1-link">ID</button></th>
                        <th style="width: 350px"><button                type="submit" name="nombre"        value="1" class="btn2-link">Nombre</button></th>
                        <th style="width: 130px"><button                type="submit" name="usuario"       value="1" class="btn3-link">Usuario</button></th>
                        <th style="width: 160px"><button disable="true" type="submit" name="telefono"      value="0" class="btn4-link">telefono</button></th>
                        <th style="width: 120px"><button                type="submit" name="nivel"         value="1" class="btn5-link">Nivel</button></th>
                        <th style="width: 265px"><button disable="true" type="submit" name="accion"        value="0" class="btn6-link">Acción</button></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = mysqli_query($conexion, $consulta); 
                        $resultado = mysqli_num_rows($query);
                        /*session_destroy();*/
                        if($resultado > 0){
                            while ($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                        <td data-campo="Id"       style="width:  65px"><?php echo $data["id"]?></td>
                                        <td data-campo="Nombre"   style="width: 350px"><?php echo strtoupper($data["nombre"])?></td>
                                        <td data-campo="Usuario"  style="width: 130px"><?php echo strtoupper($data["nombreusuario"])?></td>
                                        <td data-campo="Telefono" style="width: 160px"><?php echo $data["telefono"]?></td>
                                        <td data-campo="Nivel"    style="width: 120px"><?php echo strtoupper($data["nombrenivel"])?></td>
                                        <td                       style="width: 265px">
                                            <a style="font-size:13px; font-weight: 700; color: black;" href="" class="boton-chico">Editar</a> 
                                            <a style="font-size:13px; font-weight: 700; color: black;" href="" class="boton-chico">Eliminar</a> 
                                            <a style="font-size:13px; font-weight: 700; color: black;" href="#" class="boton-chico">Suspender</a>
                                        </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    <footer style="button:0px;">
        <div class="container" id="piedepagina">
            <h2></h2>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
