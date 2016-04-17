<?php
	include_once 'conexion.proc.php';
	include_once 'header.php';
	session_start();
	error_reporting(0);
	// echo $result_ids;
?>
<!DOCTYPE html>
<html>
	<body>
		<div class="mod-form">
		<br></br></br>
     		<div class="form-group ">
				<form name="f1" action="clientes_insert.proc.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
					<div class="form-group">
						<i class="fa fa-user"></i><input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
					</div>
					<div class="form-group">
						<i class="fa fa-user"></i><input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required><br>
					</div>
					<div class="form-group">
						<i class="fa fa-list-alt"></i><input type="text" name="dni" class="form-control" placeholder="DNI" pattern="(\d{8})([-]?)([A-Z]{1})" required title="Formato correcto: 088523548A ó 46452311G"><br>
					</div>
					<div class="form-group">
						<i class="fa fa-at"></i><input type="text" name="correo" class="form-control" placeholder="Correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required title="Formato en minúsculas. Ejemplo: info@gmail.com"><br>
					</div>	
					<div class="form-group">
						<i class="fa fa-street-view"></i><input type="text" name="direccion" class="form-control" placeholder="Dirección" required><br>
					</div>	
					<div class="form-group">
						<i class="fa fa-phone"></i><input type="tel" name="telefono" class="form-control" placeholder="Teléfono" pattern="[0-9]{9}" required><br>
					</div>					
						<input type="file" name="foto" id="foto" class="form-control"></br>
					</div>
					<button type="submit" class="log-btn" onClick="validar()" name="acce">Registrar</button>
				</form
			</div>
		</div>
	</body>
</html>