<?php
	if(!isset($_SESSION)) {
		/* echo '<script>alert("La variable NO esta definida")</script>'; */
          session_start();
	}else{
		/* echo '<script>alert("La variable esta definida")</script>'; */
	}
	
	if(empty($_SESSION['activo'])) {
		header('location: indexar.php');
	}
?>

<div class="container">
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
</div>

