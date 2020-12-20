<?php
	session_start();
	if(!empty($_SESSION['activo'])) {
    }else{
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
		include "incluye/scripts.php";
	?>
	<link rel="stylesheet" type="text/css" href="css/banco.css">
	<title>Administracion Fundacion</title>
</head>
<body>
    <?php include "incluye/header.php"; ?>
     <div class="container">
          <div class="row caja02 around-xs">
               <div class="columna-img col-12">
               	<img src="img/estetoscopio1.png" class="img-fluid" alt="">
               </div>
          </div>
     </div>
	<?php include "incluye/footer.php"; ?>
    <!------------------>
    <!-- Bootstrap JS -->
    <!------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>