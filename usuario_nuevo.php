<?php
     include "conexion.php";
?>
<!DOCTYPE html>
<html style="height: 100%;">

<head>
     <meta charset="UTF-8">
     	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	     <title>Validación de Formulario con Javascript</title>
	     <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/datos_usuarios.css">
          <script src="validar.js"></script>
          <script type="text/javascript">
               function validarusuarios(){
                    var form = document.form;
                    if(form.nombre.value==0 || form.nombre.length>50){
                         alert("Verifique los datos ingresados");
                         form.nombre.value = "";
                         form.nombre.focus();
                         return false;
                    }
                    if(form.elusuario.value==0 || form.elusuario.length>30){
                         alert("Verifique los datos ingresados");
                         form.elusuario.value = "";
                         form.elusuario.focus();
                         return false;
                    }
                    if(form.documentotipo.value==0 || form.documentotipo.length>10){
                         alert("Verifique los datos ingresados");
                         form.documentotipo.value = "";
                         form.documentotipo.focus();
                         return false;
                    }
                    if(form.documentonumero.value==0 || form.documentonumero.length>50){
                         alert("Verifique los datos ingresados");
                         form.documentonumero.value = "";
                         form.documentonumero.focus();
                         return false;
                    }
                    if(form.telefono.value==0 || form.telefono.length>20){
                         alert("Verifique los datos ingresados");
                         form.telefono.value = "";
                         form.telefono.focus();
                         return false;
                    }
                    if(form.domicilio.value==0 ||form.domicilio.value>50){
                         alert("Verifique los datos ingresados");
                         form.domicilio.value = "";
                         form.domicilio.focus();
                         return false;
                    }
                    if(form.localidad.value==0 || form.localidad.length>50){
                         alert("Verifique los datos ingresados");
                         form.localidad.value = "";
                         form.localidad.focus();
                         return false;
                    }
                    if(form.provincia.value==0 || form.provincia.length>20){
                         alert("Verifique los datos ingresados");
                         form.provincia.value = "";
                         form.provincia.focus();
                         return false;
                    }
                    if(form.correo.value==0 || form.correo.length>50){
                         alert("Verifique los datos ingresados");
                         form.correo.value = "";
                         form.correo.focus();
                         return false;
                    }
                    if(form.nivel.value==0){
                         alert("Verifique los datos ingresados");
                         form.nivel.value = "";
                         form.nivel.focus();
                         return false;
                    }
                    if(form.clave1.value==0 || form.clave1.length>20){
                         alert("Verifique los datos ingresados");
                         form.clave1.value = "";
                         form.clave1.focus();
                         return false;
                    }
                    if(form.clave2.value==0 || form.clave2.length>20){
                         alert("Verifique los datos ingresados");
                         form.clave2.value = "";
                         form.clave2.focus();
                         return false;
                    }
               }
          </script>
     </head>
<?php
	include "incluye/scripts.php";
?>
<body style="height: 100%";>
    <div class="container" style="background:rgb(40,40,40) height: 100%">
          <div class="row caja01 around-xs">
               <div class="columna-nav col-12">
          	     <nav class="navbar navbar-dark navbar-expand-md navbar-template">
                         <!--bg-primary-->
                         <!-- el bg-light  dentro del nav pone el color -->
                         <!-- el fixed-top dentro del nav, expande a toda la pagina -->
                         <!-- Logo del banco de sangre -->
                         <a class="navbar-brand" href="#"><img src="img/manosygota50.png" alt="" class="imgHeader"></a>
                         <div class="d-flex flex-row order-2 order-sm-3">
                              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                      data-target="#navbarNavDropdown">
                                      <span class="navbar-toggler-icon"></span>
                              </button>
                         </div>
                         <div class="collapse navbar-collapse order-3 order-md-2" id="navbarNavDropdown">
                              <!-- Menu -->
                              <ul class="navbar-nav ml-auto">
                                   <li class="nav-item active"><a class="nav-link" href="indexar.php">La fundacion</a></li>
                                   <li class="nav-item "> <a class="nav-link" href="">Instituciones</a></li>
                                   <li class="nav-item "> <a class="nav-link" href="">Donantes</a></li>
                                   <li class="nav-item"> <a class="nav-link" href="listausuarios.php">Unidades</a></li>
			     			<li class="nav-item"> <a class="nav-link" href=""></a></li>
				     		<li class="nav-item"> <a class="nav-link" href=""></a></li>
					     	<li class="nav-item"> <a class="nav-link" href=""></a></li>
						     <li class="nav-item"> <a class="nav-link" href=""></a></li>
     						<li class="nav-item"> <a class="nav-link" href=""></a></li>
                                   <li class="nav-item active"> <a class="nav-link" href="lista.php">Usuarios</a></li>
                              </ul>
                         </div>
                    </nav>
               </div>
          </div>
          <hr color="white" size=3>
          <hr style="border-top:1px solid white">
          <h1 style="margin-top:8px; margin-bottom:8px; background: white; color:black;">Nuevo USUARIO</h1>
          <hr style="border-top:1px solid white">
          <section id="container">
               <form name="form" action="registrar_usuario.php" method="POST" onsubmit="return validarusuarios();"> 
                    <h2 class="form_titulo" style="padding:2px;">Datos del usuario</h2>
                    <div class="contenedor-inputs">
                         <div>
                              <P style="color:white; margin-button:0">Nombre completo</P>
                              <input type="text"     id="nombre"          name="nombre"          maxlength="50" placeholder="Apellido y Nombres"         class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Usuario o Alias</P>
                              <input type="text"     id="elusuario"       name="elusuario"       maxlength="30" placeholder="HomeroSimpson"            class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Tipo de documento</P>
                              <input type="text"     id="documentotipo"   name="documentotipo"   maxlength="10" placeholder="DNI / Pasaporte"            class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Número de documento</P>
                              <input type="text"     id="documentonumero" name="documentonumero" maxlength="10" placeholder="25689742"                    class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Número de teléfono</P>
                              <input type="text"     id="telefono"        name="telefono"        maxlength="20" placeholder="Teléfono"                   class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Domicilio completo</P>
                              <input type="text"     id="domicilio"       name="domicilio"       maxlength="50" placeholder="Av San Martin 345 3D - Barrio Centro" class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Localidad (Ciudad o pueblo</P>
                              <input type="text"     id="localidad"       name="localidad"       maxlength="50" placeholder="Colonia Caroya"                  class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Provincia</P>
                              <input type="text"     id="provincia"       name="provincia"       maxlength="20" placeholder="Cordoba"                         class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Correo Electrónico</P>
                              <input type="email" id="correo"          name="correo"          maxlength="50" placeholder="juan@correo.com"                     class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Nivel de acceso</P>
                              <input type="text"  id="nivel"           name="nivel"          maxlength="10" placeholder="Operador"                             class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Clave de acceso</P>
                              <input type="password" id="clave1"          name="clave1"          required maxlength="20" placeholder="simpson123"              class="input-48" style="width:500px;">
                         </div>
                         <div>
                              <P style="color:white; margin-button:0">Repita clave</P>
                              <input type="password" id="clave2"          name="clave2"          required maxlength="20" placeholder="simpson123"              class="input-48" style="width:500px;">
                         </div>
                         <div style="align-items: center;">
                              <button class="boton-nuevo" style="width:250px; margin-left: 0; margin-top: 20px" onclick="validarusuarios();">Generar Usuario</button>
                         </div>
                    </div>
               </form>
               <!--<div class="mensajes-de-error container">
                    <f2>Mensajes de error</f2>
               </div>-->
          </section>
     </div>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
     <scripts src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></scripts>
     <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>
