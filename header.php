<?php
	session_start();
	error_reporting(0);
	$user_id = $_SESSION['id'];
	$nom_user = $_SESSION['nombre'];
	$apellidos = $_SESSION['apellidos'];
	$telf = $_SESSION['telefono'];
	$mail = $_SESSION['mail'];
	include 'conexion.proc.php';
?>
<!DOCTYPE html>
<html>
	<head>

		<!-- TITULO PAGINA -->
		<title>Grow Association</title>

		<!-- PROPIEDADES META WEB -->
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="description" content="Página web més de 65">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8"/>

		<script type="text/javascript" src="js/funciones.js"></script>
		
		<!-- ESTILOS Y FAVICON -->
		<link rel="icon" type="image/png" href="img/logo.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo_index.css"/>

		<!-- JQUERY -->
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- FONT AWESOME -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Crunchify's Scroll to Top Script -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		</script>

		<script>
			jQuery(document).ready(function() {
				var offset = 220;
				var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > offset) {
					jQuery('.crunchify-top').fadeIn(duration);
					} else {
					jQuery('.crunchify-top').fadeOut(duration);
				}
			});

			jQuery('.crunchify-top').click(function(event) {
				event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
				return false;
				})
			});
		</script>
	</head>
	<body>
		<div class="header">
				<b id='titulo_header'>G.A. Intranet</b>
			<div class="login-form">
				<div class="prin-img" align="middle" style="margin-bottom: 10px;"></div>
		 			<?php
		 				if(!isset($_SESSION['id'])){
		 			
					$_SESSION['error'] = "No te saltes pasos!";
    				header("location: index.php");
						} else {
					?>
						<h3><?php echo "Bienvenido " .$nom_user?></h3>
			            <div class="logologin">
				            <a href="logout.proc.php"><i class="fa fa-power-off fa-2x"></i></a>
			            </div>
					<?php
						}
					?>
			 </div>
			<div class="logo">
				<a href="principal.php"><img src="img/logo250.png" /></a>
			</div>
		</div>
		</div>
		<div class="menu">
			<ul>
			  	<li><a href="principal.php">Inicio</a></li>
		  		<li><a href="clientes_insert.php">Nuevo cliente</a></li>
		  		<li><a href="clientes_admin.php">Consultar cliente</a></li>
			</ul>
		</div>
