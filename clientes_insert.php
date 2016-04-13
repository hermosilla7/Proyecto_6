<?php
	include_once 'conexion.proc.php';
	session_start();
	error_reporting(0);
	// echo $result_ids;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Página de login</title>
		<link rel="icon" type="image/png" href="img/portada.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>
function valEmail(valor){
	re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*[.]([a-z]{2,3})$/
	if(!re.exec(valor)) {
		return false;
	}else{
		return true;
	}
}

function validar(){
	enviar=false;
	if(f1.pass.value==f1.repass.value){
		if(valEmail(f1.correo.value)){
			enviar=true;
		} else {
			alert("El email " + f1.correo.value + " es incorrecto.");
			enviar=false;
		}
	}
	return enviar;
}
</script>
	</head>
	<body>
		<div class="mod-form">
			<h1>Registro</h1>
     		<div class="form-group ">
				<form name="f1" action="clientes_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="dni" class="form-control" placeholder="DNI" required><br>
					</div>
					<div class="form-group">
						<input type="text" name="correo" class="form-control" placeholder="Correo" required><br>
					</div>	
					<div class="form-group">
						<input type="text" name="direccion" class="form-control" placeholder="Dirección" required><br>
					</div>	
					<div class="form-group">
						<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required><br>
					</div>					
						<input type="file" name="foto" id="foto" class="form-control"></br>
					</div>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
					<button type="button" class="sign-btn" onClick="window.location.href='index.php'">Volver</button>
				</form
			</div>
		</div>
	</body>
</html>